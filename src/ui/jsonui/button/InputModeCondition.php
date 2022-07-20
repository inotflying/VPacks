<?php

namespace vezdehod\packs\ui\jsonui\button;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * @method static InputModeCondition NOT_GAZE()
 * @method static InputModeCondition NOT_GAMEPAD()
 * @method static InputModeCondition GAMEPAD_AND_NOT_GAZE()
 */
class InputModeCondition implements JsonSerializable {

    use JsonEnumTrait;

    protected static function setup(): void {
        self::register(new self("not_gaze"));
        self::register(new self("not_gamepad"));
        self::register(new self("gamepad_and_not_gaze"));
    }
}