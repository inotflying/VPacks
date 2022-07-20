<?php

namespace vezdehod\packs\ui\jsonui\element;

use vezdehod\packs\ui\jsonui\element\properties\ControlProperties;
use vezdehod\packs\ui\jsonui\element\properties\DataBindingProperties;
use vezdehod\packs\ui\jsonui\element\properties\InputProperties;
use vezdehod\packs\ui\jsonui\element\properties\LayoutProperties;
use vezdehod\packs\ui\jsonui\element\properties\ScrollViewProperties;

/**
 * Creates a scrolling panel element
 */
class ScrollViewElement extends Element {
    use ScrollViewProperties;
    use InputProperties;
    use ControlProperties;
    use LayoutProperties;
    use DataBindingProperties;

    protected string $type = "scroll_view";
}