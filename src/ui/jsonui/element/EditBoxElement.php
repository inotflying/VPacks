<?php

namespace vezdehod\packs\ui\jsonui\element;

use vezdehod\packs\ui\jsonui\element\properties\ButtonProperties;
use vezdehod\packs\ui\jsonui\element\properties\DataBindingProperties;
use vezdehod\packs\ui\jsonui\element\properties\FocusProperties;
use vezdehod\packs\ui\jsonui\element\properties\InputProperties;
use vezdehod\packs\ui\jsonui\element\properties\TextEditProperties;

/**
 * Text field element. By default it's single-lined
 */
class EditBoxElement extends Element {
    use TextEditProperties;
    use ButtonProperties;
    use InputProperties;
    use FocusProperties;
    use DataBindingProperties;

    protected string $type = "edit_box";
}