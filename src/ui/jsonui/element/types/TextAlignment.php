<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * @method static TextAlignment LEFT()
 * @method static TextAlignment RIGHT()
 * @method static TextAlignment CENTER()
 */
class TextAlignment implements JsonSerializable {

    use JsonEnumTrait;

    protected static function setup(): void {
        self::register(new self("left"));
        self::register(new self("right"));
        self::register(new self("center"));
    }

    public function jsonSerialize() {
        return $this->name();
    }
}