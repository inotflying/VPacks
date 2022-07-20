<?php

namespace vezdehod\packs\ui\jsonui\element;

use vezdehod\packs\ui\jsonui\element\properties\DataBindingProperties;
use vezdehod\packs\ui\jsonui\element\properties\DropdownProperties;
use vezdehod\packs\ui\jsonui\element\properties\FocusProperties;
use vezdehod\packs\ui\jsonui\element\properties\InputProperties;
use vezdehod\packs\ui\jsonui\element\properties\SoundProperties;
use vezdehod\packs\ui\jsonui\element\properties\ToggleProperties;

/**
 * A toggle for dropdown purposes
 */
class DropdownElement extends Element {
    use DropdownProperties;
    use ToggleProperties;
    use InputProperties;
    use FocusProperties;
    use SoundProperties;
    use DataBindingProperties;

    protected string $type = "dropdown";
}