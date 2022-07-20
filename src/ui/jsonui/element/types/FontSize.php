<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * @method static FontSize SMALL()
 * @method static FontSize NORMAL()
 * @method static FontSize LARGE()
 * @method static FontSize EXTRA_LARGE()
 */
class FontSize implements JsonSerializable {

    use JsonEnumTrait;

    protected static function setup(): void {
        self::register(new self("small"));
        self::register(new self("normal"));
        self::register(new self("large"));
        self::register(new self("extra_large"));
    }
}