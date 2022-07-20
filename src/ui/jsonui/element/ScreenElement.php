<?php

namespace vezdehod\packs\ui\jsonui\element;

use vezdehod\packs\ui\jsonui\binding\Binding;
use vezdehod\packs\ui\jsonui\element\properties\ControlProperties;
use vezdehod\packs\ui\jsonui\element\properties\DataBindingProperties;
use vezdehod\packs\ui\jsonui\element\properties\LayoutProperties;
use vezdehod\packs\ui\jsonui\element\properties\ScreenProperties;

/**
 * Screen element
 */
class ScreenElement extends Element {
    public static function getTitleBinding(): Binding { return new Binding("title_text"); }

    use ScreenProperties;
    use ControlProperties;
    use LayoutProperties;
    use DataBindingProperties;

    protected string $type = "screen";
}