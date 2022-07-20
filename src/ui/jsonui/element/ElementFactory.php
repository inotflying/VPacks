<?php

namespace vezdehod\packs\ui\jsonui\element;

use vezdehod\packs\ui\jsonui\element\types\IntVec2;
use vezdehod\packs\ui\jsonui\element\types\Offset;
use vezdehod\packs\ui\jsonui\element\types\Orientation;
use vezdehod\packs\ui\jsonui\element\types\Size;
use vezdehod\packs\ui\jsonui\IResolvable;
use vezdehod\packs\ui\jsonui\IUINamespace;

trait ElementFactory {
    //TODO: Is this actually necessary?

    abstract public function addElement(Element $elem): static;

    protected function _get_namespace(): IUINamespace {
        if ($this instanceof IUINamespace) {
            return $this;
        }
        return $this->getNamespace();
    }

    private function _get_parent(): ?Element {
        return $this instanceof Element ? $this : null;
    }

    public function addExtends(string $control, string|IResolvable $extends): ExtendsElement {
        $this->addElement($elem = new ExtendsElement($this->_get_namespace(), $control, $extends, $this->_get_parent()));
        return $elem;
    }

    public function addPanel(string $control, ?Size $size = null, ?Offset $offset = null): PanelElement {
        $this->addElement($panel = new PanelElement($this->_get_namespace(), $control, $this->_get_parent()));
        if ($size !== null) {
            $panel->size($size);
        }
        if ($offset !== null) {
            $panel->offset($offset);
        }

        return $panel;
    }

    public function addStackPanel(string $control, ?Orientation $orientation = null): StackPanelElement {
        $this->addElement($stack = new StackPanelElement($this->_get_namespace(), $control, $this->_get_parent()));
        if ($orientation !== null) {
            $stack->orientation($orientation);
        }
        return $stack;
    }

    public function addGrid(string $control, ?IntVec2 $dimensions = null): GridElement {
        $this->addElement($grid = new GridElement($this->_get_namespace(), $control, $this->_get_parent()));
        if ($dimensions !== null) {
            $grid->gridDimensions($dimensions);
        }
        return $grid;
    }

    public function addLabel(string $control, ?string $text = null): LabelElement {
        $this->addElement($label = new LabelElement($this->_get_namespace(), $control, $this->_get_parent()));
        if ($text !== null) {
            $label->text($text);
        }
        return $label;
    }

    public function addImage(string $control, ?string $texture = null): ImageElement {
        $this->addElement($img = new ImageElement($this->_get_namespace(), $control, $this->_get_parent()));
        if ($texture !== null) {
            $img->texture($texture);
        }
        return $img;
    }

    public function addInputPanel(string $control): InputPanelElement {
        $this->addElement($input = new InputPanelElement($this->_get_namespace(), $control, $this->_get_parent()));
        return $input;
    }

    public function addButton(string $control): ButtonElement {
        $this->addElement($btn = new ButtonElement($this->_get_namespace(), $control, $this->_get_parent()));
        return $btn;
    }

    public function addToggle(string $control): ToggleElement {
        $this->addElement($toggle = new ToggleElement($this->_get_namespace(), $control, $this->_get_parent()));
        return $toggle;
    }

    public function addDropdown(string $control): DropdownElement {
        $this->addElement($dropdown = new DropdownElement($this->_get_namespace(), $control, $this->_get_parent()));
        return $dropdown;
    }

    public function addSlider(string $control): SliderElement {
        $this->addElement($slider = new SliderElement($this->_get_namespace(), $control, $this->_get_parent()));
        return $slider;
    }

    public function addSliderBox(string $control): SliderBoxElement {
        $this->addElement($slider = new SliderBoxElement($this->_get_namespace(), $control, $this->_get_parent()));
        return $slider;
    }

    public function addEditBox(string $control): EditBoxElement {
        $this->addElement($box = new EditBoxElement($this->_get_namespace(), $control, $this->_get_parent()));
        return $box;
    }

    public function addScrollView(string $control): ScrollViewElement {
        $this->addElement($view = new ScrollViewElement($this->_get_namespace(), $control, $this->_get_parent()));
        return $view;
    }

    public function addScrollTrack(string $control): ScrollbarTrackElement {
        $this->addElement($track = new ScrollbarTrackElement($this->_get_namespace(), $control, $this->_get_parent()));
        return $track;
    }

    public function addScrollBox(string $control): ScrollbarBoxElement {
        $this->addElement($box = new ScrollbarBoxElement($this->_get_namespace(), $control, $this->_get_parent()));
        return $box;
    }

    public function addFactory(string $control): FactoryElement {
        $this->addElement($factory = new FactoryElement($this->_get_namespace(), $control, $this->_get_parent()));
        return $factory;
    }

    public function addScreen(string $control): ScreenElement {
        $this->addElement($box = new ScreenElement($this->_get_namespace(), $control, $this->_get_parent()));
        return $box;
    }

    public function addCustom(string $control): CustomElement {
        $this->addElement($custom = new CustomElement($this->_get_namespace(), $control, $this->_get_parent()));
        return $custom;
    }

    public function addSelectionWheel(string $control): SelectionWheelElement {
        $this->addElement($wheel = new SelectionWheelElement($this->_get_namespace(), $control, $this->_get_parent()));
        return $wheel;
    }
}

