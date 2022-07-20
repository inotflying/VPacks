<?php

namespace vezdehod\packs\ui\jsonui\button;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * @method static MappingType GLOBAL()
 * @method static MappingType PRESSED()
 * @method static MappingType DOUBLE_PRESSED()
 * @method static MappingType FOCUSED()
 */
class MappingType implements JsonSerializable {

    use JsonEnumTrait;

    protected static function setup(): void {
        self::register(new self("global"));
        self::register(new self("pressed"));
        self::register(new self("double_pressed"));
        self::register(new self("focused"));
    }
}