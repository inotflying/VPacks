<?php

namespace vezdehod\packs\ui\jsonui\expression\condition;

use JsonSerializable;
use vezdehod\packs\ui\jsonui\variable\Variable;
use function array_merge;

class VariableCondition implements JsonSerializable {

    private array $values = [];

    public function __construct(private Condition $condition) { }

    public function set(Variable $var, mixed $value): static {
        $this->values[$var->getName()] = $value;
        return $this;
    }

    public function getValue(Variable $var): mixed {
        return $this->values[$var->getName()];
    }

    public function getValues(): array {
        return $this->values;
    }

    public function jsonSerialize(): array {
        return array_merge([
            'requires' => $this->condition,
        ], $this->values);
    }
}