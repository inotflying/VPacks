<?php

namespace vezdehod\packs\ui\jsonui\binding;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * @method static BindingType GLOBAL()
 * @method static BindingType VIEW()
 * @method static BindingType COLLECTION()
 * @method static BindingType COLLECTION_DETAILS()
 * @method static BindingType NONE()
 */
class BindingType implements JsonSerializable {
    use JsonEnumTrait;

    protected static function setup(): void {
        self::register(new self("global"));
        self::register(new self("view"));
        self::register(new self("collection"));
        self::register(new self("collection_details"));
        self::register(new self("none"));
    }
}