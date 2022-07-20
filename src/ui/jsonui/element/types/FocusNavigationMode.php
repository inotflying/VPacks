<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * @method static FocusNavigationMode NONE()
 * @method static FocusNavigationMode STOP()
 * @method static FocusNavigationMode CUSTOM()
 * @method static FocusNavigationMode CONTAINED()
 */
class FocusNavigationMode implements JsonSerializable {
    use JsonEnumTrait;

    protected static function setup(): void {
        self::register(new FocusNavigationMode("none"));
        self::register(new FocusNavigationMode("stop"));
        self::register(new FocusNavigationMode("custom"));
        self::register(new FocusNavigationMode("contained"));
    }
}