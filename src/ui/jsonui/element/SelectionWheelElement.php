<?php

namespace vezdehod\packs\ui\jsonui\element;

use vezdehod\packs\ui\jsonui\element\properties\DataBindingProperties;
use vezdehod\packs\ui\jsonui\element\properties\FocusProperties;
use vezdehod\packs\ui\jsonui\element\properties\InputProperties;
use vezdehod\packs\ui\jsonui\element\properties\SelectionWheelProperties;
use vezdehod\packs\ui\jsonui\element\properties\SoundProperties;

/**
 * ???
 */
class SelectionWheelElement extends Element {
    use SelectionWheelProperties;
    use InputProperties;
    use FocusProperties;
    use SoundProperties;
    use DataBindingProperties;

    protected string $type = "selection_wheel";
}