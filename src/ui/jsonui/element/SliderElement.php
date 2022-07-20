<?php

namespace vezdehod\packs\ui\jsonui\element;

use vezdehod\packs\ui\jsonui\element\properties\ControlProperties;
use vezdehod\packs\ui\jsonui\element\properties\DataBindingProperties;
use vezdehod\packs\ui\jsonui\element\properties\FocusProperties;
use vezdehod\packs\ui\jsonui\element\properties\InputProperties;
use vezdehod\packs\ui\jsonui\element\properties\LayoutProperties;
use vezdehod\packs\ui\jsonui\element\properties\SliderProperties;
use vezdehod\packs\ui\jsonui\element\properties\SoundProperties;

/**
 * Range input element
 */
class SliderElement extends Element {
    use SliderProperties;
    use InputProperties;
    use FocusProperties;
    use SoundProperties;
    use ControlProperties;
    use LayoutProperties;
    use DataBindingProperties;

    protected string $type = "slider";
}