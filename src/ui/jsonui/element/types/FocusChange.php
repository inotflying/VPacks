<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * @method static FocusChange FOCUS_OVERRIDE_STOP()
 */
class FocusChange implements JsonSerializable {

    use JsonEnumTrait;
    
    protected static function setup(): void {
        self::register(new self("FOCUS_OVERRIDE_STOP"));
    }
}