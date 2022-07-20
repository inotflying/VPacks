<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;

class Cube implements JsonSerializable {

    public static function zero(): Cube {
        return new self(IntVec2::zero(), IntVec2::zero());
    }

    public function __construct(
        private IntVec2 $cornerFrom,
        private IntVec2 $cornerTo
    ) {
    }

    public function jsonSerialize(): array {
        return [$this->cornerFrom->getX(), $this->cornerFrom->getY(), $this->cornerTo->getX(), $this->cornerTo->getY()];
    }
}