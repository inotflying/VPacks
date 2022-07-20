<?php

namespace vezdehod\packs\ui\jsonui\element;

use vezdehod\packs\ui\jsonui\element\properties\ControlProperties;
use vezdehod\packs\ui\jsonui\element\properties\InputProperties;
use vezdehod\packs\ui\jsonui\element\properties\LayoutProperties;

/**
 * The scrollbar track
 */
class ScrollbarTrackElement extends Element {
    use InputProperties;
    use ControlProperties;
    use LayoutProperties;

    protected string $type = "scrollbar_track";
}