<?php

namespace vezdehod\packs\ui\jsonui\binding;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * @method static BindingCondition ALWAYS()
 * @method static BindingCondition ALWAYS_WHEN_VISIBLE()
 * @method static BindingCondition VISIBLE()
 * @method static BindingCondition ONCE()
 * @method static BindingCondition NONE()
 * @method static BindingCondition VISIBILITY_CHANGED()
 */
class BindingCondition implements JsonSerializable {

    use JsonEnumTrait;

    protected static function setup(): void {
        self::register(new self('always'));
        self::register(new self('always_when_visible'));
        self::register(new self('visible'));
        self::register(new self('once'));
        self::register(new self('none'));
        self::register(new self('visibility_changed'));
    }
}