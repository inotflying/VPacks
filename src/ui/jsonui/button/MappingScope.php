<?php

namespace vezdehod\packs\ui\jsonui\button;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * @method static MappingScope VIEW()
 * @method static MappingScope CONTROLLER()
 */
class MappingScope implements JsonSerializable {
    use JsonEnumTrait;

    protected static function setup(): void {
        self::register(new self("view"));
        self::register(new self("controller"));
    }
}