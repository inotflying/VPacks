<?php

namespace vezdehod\packs\ui\jsonui\anims;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * @method static AnimType ALPHA()
 * @method static AnimType CLIP()
 * @method static AnimType COLOR()
 * @method static AnimType FLIP_BOOK()
 * @method static AnimType OFFSET()
 * @method static AnimType SIZE()
 * @method static AnimType UV()
 * @method static AnimType WAIT()
 * @method static AnimType ASEPRITE_FLIP_BOOK()
 */
class AnimType implements JsonSerializable {
    use JsonEnumTrait;

    protected static function setup(): void {
        self::register(new self("alpha"));
        self::register(new self("clip"));
        self::register(new self("color"));
        self::register(new self("flip_book"));
        self::register(new self("offset"));
        self::register(new self("size"));
        self::register(new self("uv"));
        self::register(new self("wait"));
        self::register(new self("aseprite_flip_book"));
    }
}