<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use pocketmine\color\Color as PMColor;
use function round;

class Color implements JsonSerializable {

    public static function white(bool $alpha = false): static {
        return new self(255, 255, 255, $alpha ? 0 : null);
    }

    public static function fromPMColor(PMColor $color, bool $alpha = false): static {
        return new self($color->getR(), $color->getG(), $color->getB(), $alpha ? $color->getA() : null);
    }

    public function __construct(
        private int  $r,
        private int  $g,
        private int  $b,
        private ?int $a = null
    ) {
    }

    public function getR(): int {
        return $this->r;
    }

    public function getG(): int {
        return $this->g;
    }

    public function getB(): int {
        return $this->b;
    }

    public function getA(): ?int {
        return $this->a;
    }

    public function withAlpha(): Color {
        return $this->a !== null ? $this : new self($this->r, $this->g, $this->b, 255);
    }

    public function withoutAlpha(): Color {
        return $this->a === null ? $this : new self($this->r, $this->g, $this->b);
    }

    public function jsonSerialize() {
        $data = [$this->r, $this->g, $this->b];
        if ($this->a !== null) {
            $data[] = $this->a;
        }

        return array_map(static fn($i) => round($i / 255, 3), $data);
    }
}