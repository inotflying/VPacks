<?php

namespace vezdehod\packs\ui\jsonui\expression;

use vezdehod\packs\ui\jsonui\IResolvable;

class Expression implements IResolvable {

    public function __construct(protected string $rawJsonUiExpr) { }

    public function __toString(): string { return $this->rawJsonUiExpr; }

    public function getName(): string { return $this->rawJsonUiExpr; }

    public function jsonSerialize() { return $this->rawJsonUiExpr; }
}