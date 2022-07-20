<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * @method static Rotation AUTO()
 * @method static Rotation GESTURE_X()
 * @method static Rotation CUSTOM_Y()
 */
class Rotation implements JsonSerializable {
    use JsonEnumTrait;

    protected static function setup(): void {
        self::register(new self("auto"));
        self::register(new self("gesture_x"));
        self::register(new self("custom_y"));
    }
}