<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\IResolvable;

trait SliderBoxProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#slider-box

    /**
     * default_control: Name of the child control that will be displayed in the default state
     * default: ???
     */
    public function defaultControl(string|IResolvable $val): static { return $this->prop('default_control', $val); }

    public function getDefaultControl(): string|IResolvable { return $this->getProp('default_control', ""); }

    /**
     * hover_control: Name of the child control that will be displayed in the hover state
     * default: ???
     */
    public function hoverControl(string|IResolvable $val): static { return $this->prop('hover_control', $val); }

    public function getHoverControl(): string|IResolvable { return $this->getProp('hover_control', ""); }

    /**
     * locked_control: Name of the child control that will be displayed in the locked state
     * default: ???
     */
    public function lockedControl(string|IResolvable $val): static { return $this->prop('locked_control', $val); }

    public function getLockedControl(): string|IResolvable { return $this->getProp('locked_control', ""); }

}