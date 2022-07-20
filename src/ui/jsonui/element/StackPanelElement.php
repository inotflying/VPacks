<?php

namespace vezdehod\packs\ui\jsonui\element;

use vezdehod\packs\ui\jsonui\binding\Binding;
use vezdehod\packs\ui\jsonui\element\properties\CollectionProperties;
use vezdehod\packs\ui\jsonui\element\properties\ControlProperties;
use vezdehod\packs\ui\jsonui\element\properties\DataBindingProperties;
use vezdehod\packs\ui\jsonui\element\properties\LayoutProperties;
use vezdehod\packs\ui\jsonui\element\properties\StackPanelProperties;

/**
 * Similar to panel but stacks its children depending on orientation property value
 */
class StackPanelElement extends Element {

    public static function getCollectionLengthBinding(): Binding { return new Binding("collection_length"); }

    use StackPanelProperties;
    use CollectionProperties;
    use ControlProperties;
    use LayoutProperties;
    use DataBindingProperties;

    protected string $type = "stack_panel";
}