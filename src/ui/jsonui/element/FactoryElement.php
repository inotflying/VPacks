<?php

namespace vezdehod\packs\ui\jsonui\element;

use vezdehod\packs\ui\jsonui\element\properties\ControlProperties;
use vezdehod\packs\ui\jsonui\element\properties\FactoryProperties;
use vezdehod\packs\ui\jsonui\element\properties\LayoutProperties;

/**
 * A element generator
 */
class FactoryElement extends Element {
    use FactoryProperties;
    use ControlProperties;
    use LayoutProperties;

    protected string $type = "factory";
}