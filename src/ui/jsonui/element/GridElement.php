<?php

namespace vezdehod\packs\ui\jsonui\element;

use vezdehod\packs\ui\jsonui\binding\Binding;
use vezdehod\packs\ui\jsonui\element\properties\CollectionProperties;
use vezdehod\packs\ui\jsonui\element\properties\ControlProperties;
use vezdehod\packs\ui\jsonui\element\properties\DataBindingProperties;
use vezdehod\packs\ui\jsonui\element\properties\GridProperties;
use vezdehod\packs\ui\jsonui\element\properties\LayoutProperties;

/**
 * Grid of elements
 */
class GridElement extends Element {

    public static function getMaximumGridItemsBinding(): Binding { return new Binding("maximum_grid_items"); }

    use GridProperties;
    use CollectionProperties;
    use ControlProperties;
    use LayoutProperties;
    use DataBindingProperties;

    protected string $type = "grid";
}