<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\element\types\Orientation;
use vezdehod\packs\ui\jsonui\IResolvable;

trait StackPanelProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#stack-panel

    /**
     * orientation: Direction the elements stack inside stack_panel.
     * default: vertical
     */
    public function orientation(Orientation|IResolvable $orientation): static { return $this->prop('orientation', $orientation instanceof Orientation ? $orientation->or(Orientation::VERTICAL()) : $orientation); }

    public function getOrientation(): Orientation|IResolvable { return $this->getProp('orientation', Orientation::VERTICAL()); }
}