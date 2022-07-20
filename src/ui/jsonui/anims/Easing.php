<?php

namespace vezdehod\packs\ui\jsonui\anims;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * https://easings.net/
 *
 * @method static Easing LINEAR()
 * @method static Easing SPRING()
 * @method static Easing IN_QUAD()
 * @method static Easing OUT_QUAD()
 * @method static Easing IN_OUT_QUAD()
 * @method static Easing IN_CUBIC()
 * @method static Easing OUT_CUBIC()
 * @method static Easing IN_OUT_CUBIC()
 * @method static Easing IN_QUART()
 * @method static Easing OUT_QUART()
 * @method static Easing IN_OUT_QUART()
 * @method static Easing IN_QUINT()
 * @method static Easing OUT_QUINT()
 * @method static Easing IN_OUT_QUINT()
 * @method static Easing IN_SINE()
 * @method static Easing OUT_SINE()
 * @method static Easing IN_OUT_SINE()
 * @method static Easing IN_EXPO()
 * @method static Easing OUT_EXPO()
 * @method static Easing IN_OUT_EXPO()
 * @method static Easing IN_CIRC()
 * @method static Easing OUT_CIRC()
 * @method static Easing IN_OUT_CIRC()
 * @method static Easing IN_BOUNCE()
 * @method static Easing OUT_BOUNCE()
 * @method static Easing IN_OUT_BOUNCE()
 * @method static Easing IN_BACK()
 * @method static Easing OUT_BACK()
 * @method static Easing IN_OUT_BACK()
 * @method static Easing IN_ELASTIC()
 * @method static Easing OUT_ELASTIC()
 * @method static Easing IN_OUT_ELASTIC()
 */
class Easing implements JsonSerializable {
    use JsonEnumTrait;

    protected static function setup(): void {
        self::register(new self("linear"));
        self::register(new self("spring"));
        self::register(new self("in_quad"));
        self::register(new self("out_quad"));
        self::register(new self("in_out_quad"));
        self::register(new self("in_cubic"));
        self::register(new self("out_cubic"));
        self::register(new self("in_out_cubic"));
        self::register(new self("in_quart"));
        self::register(new self("out_quart"));
        self::register(new self("in_out_quart"));
        self::register(new self("in_quint"));
        self::register(new self("out_quint"));
        self::register(new self("in_out_quint"));
        self::register(new self("in_sine"));
        self::register(new self("out_sine"));
        self::register(new self("in_out_sine"));
        self::register(new self("in_expo"));
        self::register(new self("out_expo"));
        self::register(new self("in_out_expo"));
        self::register(new self("in_circ"));
        self::register(new self("out_circ"));
        self::register(new self("in_out_circ"));
        self::register(new self("in_bounce"));
        self::register(new self("out_bounce"));
        self::register(new self("in_out_bounce"));
        self::register(new self("in_back"));
        self::register(new self("out_back"));
        self::register(new self("in_out_back"));
        self::register(new self("in_elastic"));
        self::register(new self("out_elastic"));
        self::register(new self("in_out_elastic"));
    }
}