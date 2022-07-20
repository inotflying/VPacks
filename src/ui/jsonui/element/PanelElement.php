<?php

namespace vezdehod\packs\ui\jsonui\element;

use vezdehod\packs\ui\jsonui\element\properties\ControlProperties;
use vezdehod\packs\ui\jsonui\element\properties\DataBindingProperties;
use vezdehod\packs\ui\jsonui\element\properties\LayoutProperties;

/**
 * A container, like <div> in HTML
 */
class PanelElement extends Element {
    use ControlProperties;
    use LayoutProperties;
    use DataBindingProperties;

    protected string $type = "panel";
}