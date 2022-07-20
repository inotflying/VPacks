<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\IResolvable;

trait ButtonProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#button

    /**
     * default_control: Name of the child control that will be displayed only in the default state
     * default: ???
     */
    public function defaultControl(string|IResolvable $val): static { return $this->prop('default_control', $val); }

    public function getDefaultControl(): string|IResolvable { return $this->getProp('default_control', ""); }

    /**
     * hover_control: Name of the child control that will be displayed only in the hover state
     * default: ???
     */
    public function hoverControl(string|IResolvable $val): static { return $this->prop('hover_control', $val); }

    public function getHoverControl(): string|IResolvable { return $this->getProp('hover_control', ""); }

    /**
     * pressed_control: Name of the child control that will be displayed only in the pressed state
     * default: ???
     */
    public function pressedControl(string|IResolvable $val): static { return $this->prop('pressed_control', $val); }

    public function getPressedControl(): string|IResolvable { return $this->getProp('pressed_control', ""); }

    /**
     * locked_control: Name of the child control that will be displayed only in the locked state
     * default: ???
     */
    public function lockedControl(string|IResolvable $val): static { return $this->prop('locked_control', $val); }

    public function getLockedControl(): string|IResolvable { return $this->getProp('locked_control', ""); }

}