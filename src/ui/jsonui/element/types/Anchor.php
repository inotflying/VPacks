<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#anchor-properties
 *
 * Anchors allows the elements to align to a certain point where position, size, scale, animations, etc will take as the point for transformation.
 * In JSON UI, there's two properties anchor_from and anchor_to that together achieve this.
 *
 * @method static Anchor TOP_LEFT()
 * @method static Anchor TOP_MIDDLE()
 * @method static Anchor TOP_RIGHT()
 * @method static Anchor LEFT_MIDDLE()
 * @method static Anchor CENTER()
 * @method static Anchor RIGHT_MIDDLE()
 * @method static Anchor BOTTOM_LEFT()
 * @method static Anchor BOTTOM_MIDDLE()
 * @method static Anchor BOTTOM_RIGHT()
 */
class Anchor implements JsonSerializable {

    use JsonEnumTrait;

    protected static function setup(): void {
        self::register(new self("top_left"));
        self::register(new self("top_middle"));
        self::register(new self("top_right"));
        self::register(new self("left_middle"));
        self::register(new self("center"));
        self::register(new self("right_middle"));
        self::register(new self("bottom_left"));
        self::register(new self("bottom_middle"));
        self::register(new self("bottom_right"));
    }
}