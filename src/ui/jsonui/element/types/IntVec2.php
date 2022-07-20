<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;

class IntVec2 implements JsonSerializable {

    public static function zero(): static { return new self(0, 0); }

    public function __construct(private int $x, private int $y) { }

    public function getX(): int { return $this->x; }

    public function getY(): int { return $this->y; }

    public function plus(IntVec2 $vec2): static { return new self($this->x + $vec2->x, $this->y + $vec2->y); }

    public function minus(IntVec2 $vec2): static { return new self($this->x - $vec2->x, $this->y - $vec2->y); }

    public function jsonSerialize(): array { return [$this->x, $this->y]; }
}