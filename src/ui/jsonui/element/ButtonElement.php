<?php

namespace vezdehod\packs\ui\jsonui\element;

use vezdehod\packs\ui\jsonui\element\properties\ButtonProperties;
use vezdehod\packs\ui\jsonui\element\properties\DataBindingProperties;
use vezdehod\packs\ui\jsonui\element\properties\FocusProperties;
use vezdehod\packs\ui\jsonui\element\properties\InputProperties;
use vezdehod\packs\ui\jsonui\element\properties\SoundProperties;

/**
 * A button and it can have 4 states (default, hover, pressed and locked)
 */
class ButtonElement extends Element {
    use ButtonProperties;
    use InputProperties;
    use FocusProperties;
    use SoundProperties;
    use DataBindingProperties;

    protected string $type = "button";
}