<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * TODO: I think this should be registry, not hardcoded value since there is exists a way to use custom fonts
 *
 * @method static FontType DEFAULT()
 * @method static FontType RUNE()
 * @method static FontType UNICODE()
 * @method static FontType SMOOTH()
 * @method static FontType MINECRAFTTEN()
 */
class FontType implements JsonSerializable {

    use JsonEnumTrait;

    protected static function setup(): void {
        self::register(new self("default"));
        self::register(new self("rune"));
        self::register(new self("unicode"));
        self::register(new self("smooth"));
        self::register(new self("MinecraftTen"));
    }
}