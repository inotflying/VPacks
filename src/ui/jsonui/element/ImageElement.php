<?php

namespace vezdehod\packs\ui\jsonui\element;

use vezdehod\packs\ui\jsonui\binding\Binding;
use vezdehod\packs\ui\jsonui\element\properties\ControlProperties;
use vezdehod\packs\ui\jsonui\element\properties\DataBindingProperties;
use vezdehod\packs\ui\jsonui\element\properties\LayoutProperties;
use vezdehod\packs\ui\jsonui\element\properties\SpriteProperties;

/**
 * Sprite element. Draws a texture.
 */
class ImageElement extends Element {
    public static function getTextureBinding(): Binding { return new Binding("texture"); }

    public static function getTextureFSBinding(): Binding { return new Binding("texture_file_system"); }

    use SpriteProperties;
    use ControlProperties;
    use LayoutProperties;
    use DataBindingProperties;

    protected string $type = "image";
}