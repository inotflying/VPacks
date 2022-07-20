<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * TODO: It's seems like true and false as an enum element very bad idea for this?
 * @method static Tiled TRUE()
 * @method static Tiled FALSE()
 * @method static Tiled X()
 * @method static Tiled Y()
 */
class Tiled implements JsonSerializable {

    use JsonEnumTrait;

    protected static function setup(): void {
        self::register(new self("true"));
        self::register(new self("false"));
        self::register(new self("x"));
        self::register(new self("y"));
    }

    public function jsonSerialize(): string {
        return $this->name();
    }
}