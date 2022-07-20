<?php

namespace vezdehod\packs\ui\jsonui\element;

use vezdehod\packs\ui\jsonui\element\properties\ControlProperties;
use vezdehod\packs\ui\jsonui\element\properties\DataBindingProperties;
use vezdehod\packs\ui\jsonui\element\properties\FocusProperties;
use vezdehod\packs\ui\jsonui\element\properties\InputProperties;
use vezdehod\packs\ui\jsonui\element\properties\LayoutProperties;
use vezdehod\packs\ui\jsonui\element\properties\SoundProperties;
use vezdehod\packs\ui\jsonui\element\properties\ToggleProperties;

/**
 * A toggle and it has 2 states (checked or unchecked). Each state has a hover and locked variant
 */
class ToggleElement extends Element {
    use ToggleProperties;
    use InputProperties;
    use FocusProperties;
    use SoundProperties;
    use ControlProperties;
    use LayoutProperties;
    use DataBindingProperties;

    protected string $type = "toggle";
}