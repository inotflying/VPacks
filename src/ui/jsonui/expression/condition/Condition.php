<?php

namespace vezdehod\packs\ui\jsonui\expression\condition;

use vezdehod\packs\ui\jsonui\expression\Expression;
use function array_map;
use function count;
use function implode;
use function preg_replace;

class Condition extends Expression {

    public function asBoolean(): ?bool {
        return match (preg_replace("/[^a-z]/i", "", $this->rawJsonUiExpr)) {
            "true", "notfalse" => true,
            "nottrue", "false" => false,
            default => null
        };
    }

    public function not(): Condition {
        return new self("(not ($this->rawJsonUiExpr))");
    }

    public function and(Condition ...$and): Condition {
        if (count($and) === 0) {
            return $this;
        }
        return new self("(($this->rawJsonUiExpr) and " . implode(" and ", array_map(static fn($c) => "($c->rawJsonUiExpr)", $and)) . ")");
    }

    public function or(Condition ...$or): Condition {
        if (count($or) === 0) {
            return $this;
        }
        return new self("(($this->rawJsonUiExpr) or " . implode(" or ", array_map(static fn($c) => "($c->rawJsonUiExpr)", $or)) . ")");
    }

}