<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;

/**
 * It's TopLeft based meaning the coordinates [0, 0] start at the top left of the screen.
 */
class Offset implements JsonSerializable {

    public const ZERO = "0px";

    public static function zero(): Offset { return new self(self::ZERO, self::ZERO); }

    //"px" - pixels
    public static function pixels(int $pixels): string { return "{$pixels}px"; }

    //"%" - Width/height of the parent element
    public static function ofParent(int $percent): string { return "$percent%"; }

    //"%x" - Width of the element
    public static function ofWidth(int $percent): string { return "$percent%x"; }

    //"%y" - Height of the element
    public static function ofHeight(int $percent): string { return "$percent%y"; }

    public function __construct(
        private string $x = self::ZERO,
        private string $y = self::ZERO,
    ) {
    }

    public function getX(): string { return $this->x; }

    public function getY(): string { return $this->y; }

    public function minus(int $x = 0, int $y = 0): static {
        return new self(
            $x === 0 ? $this->x : "$this->x - " . self::pixels($x),
            $y === 0 ? $this->y : "$this->y - " . self::pixels($y)
        );
    }

    public function plus(int $x = 0, int $y = 0): static {
        return new self(
            $x === 0 ? $this->x : "$this->x + " . self::pixels($x),
            $y === 0 ? $this->y : "$this->y + " . self::pixels($y)
        );
    }

    public function jsonSerialize(): array { return [$this->x, $this->y]; }
}