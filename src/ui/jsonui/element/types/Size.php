<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;

class Size implements JsonSerializable {

    public const ZERO = "0px"; // 0px
    public const DEFAULT = "default"; // Default value which is "100%"
    public const FILL = "fill"; // Expands to the remaining width/height of the parent element

    public static function default(): static { return new self(self::DEFAULT, self::DEFAULT); }

    public static function zero(): static { return new self(self::ZERO, self::ZERO); }

    //"px" (Number of pixels.)
    public static function pixels(int $pixels): string { return "{$pixels}px"; }

    //"%" (Percentage of relative to the parent element)
    public static function ofParent(int $percent): string { return "$percent%"; }

    //"%c" (Percentage of the total width/height of the element children)
    public static function ofChildren(int $percent): string { return "$percent%c"; }

    //"%cm" (Percentage of the width/height of the biggest visible child of that element)
    public static function ofBiggestChildren(int $percent): string { return "$percent%cm"; }

    //"%sm" (Percentage of the width/height of the sibling element)
    public static function ofSibling(int $percent): string { return "$percent%sm"; }

    //"%x" (Percentage of the element width)
    public static function ofWidth(int $percent): string { return "$percent%x"; }

    //"%y" (Percentage of the element height)
    public static function ofHeight(int $percent): string { return "$percent%y"; }

    public function __construct(
        private string $x = self::DEFAULT,
        private string $y = self::DEFAULT,
    ) {

    }

    public function getX(): string { return $this->x; }

    public function getY(): string { return $this->y; }


    public function minus(string $x = self::ZERO, string $y = self::ZERO): static {
        return new self(
            $x === self::ZERO ? $this->x : "$this->x - " . self::pixels($x),
            $y === self::ZERO ? $this->y : "$this->y - " . self::pixels($y)
        );
    }

    public function plus(string $x = self::ZERO, string $y = self::ZERO): static {
        return new self(
            $x === self::ZERO ? $this->x : "$this->x + " . self::pixels($x),
            $y === self::ZERO ? $this->y : "$this->y + " . self::pixels($y)
        );
    }

    public function jsonSerialize(): array { return [$this->x, $this->y]; }
}