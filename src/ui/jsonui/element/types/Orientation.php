<?php

namespace vezdehod\packs\ui\jsonui\element\types;


use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * @method static Orientation VERTICAL()
 * @method static Orientation HORIZONTAL()
 * @method static Orientation NONE()
 */
class Orientation implements JsonSerializable {

    use JsonEnumTrait;

    protected static function setup(): void {
        self::register(new self("vertical"));
        self::register(new self("horizontal"));
        self::register(new self("none"));
    }

    public function or(Orientation $orientation): Orientation {
        if ($this === self::NONE()) {
            return $orientation;
        }
        return $this;
    }
}