<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * @method static ClipDirection UP()
 * @method static ClipDirection DOWN()
 * @method static ClipDirection LEFT()
 * @method static ClipDirection RIGHT()
 * @method static ClipDirection CENTER()
 */
class ClipDirection implements JsonSerializable {
    use JsonEnumTrait;

    protected static function setup(): void {
        self::register(new self("up"));
        self::register(new self("down"));
        self::register(new self("left"));
        self::register(new self("right"));
        self::register(new self("center"));
    }
}