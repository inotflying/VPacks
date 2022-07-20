<?php

namespace vezdehod\packs\ui\jsonui;

use vezdehod\packs\ui\jsonui\element\ButtonElement;
use vezdehod\packs\ui\jsonui\element\CustomElement;
use vezdehod\packs\ui\jsonui\element\DropdownElement;
use vezdehod\packs\ui\jsonui\element\EditBoxElement;
use vezdehod\packs\ui\jsonui\element\Element;
use vezdehod\packs\ui\jsonui\element\ExtendsElement;
use vezdehod\packs\ui\jsonui\element\FactoryElement;
use vezdehod\packs\ui\jsonui\element\GridElement;
use vezdehod\packs\ui\jsonui\element\ImageElement;
use vezdehod\packs\ui\jsonui\element\InputPanelElement;
use vezdehod\packs\ui\jsonui\element\LabelElement;
use vezdehod\packs\ui\jsonui\element\PanelElement;
use vezdehod\packs\ui\jsonui\element\ScreenElement;
use vezdehod\packs\ui\jsonui\element\ScrollbarBoxElement;
use vezdehod\packs\ui\jsonui\element\ScrollbarTrackElement;
use vezdehod\packs\ui\jsonui\element\ScrollViewElement;
use vezdehod\packs\ui\jsonui\element\SelectionWheelElement;
use vezdehod\packs\ui\jsonui\element\SliderBoxElement;
use vezdehod\packs\ui\jsonui\element\SliderElement;
use vezdehod\packs\ui\jsonui\element\StackPanelElement;
use vezdehod\packs\ui\jsonui\element\ToggleElement;
use vezdehod\packs\ui\jsonui\element\types\IntVec2;
use vezdehod\packs\ui\jsonui\element\types\Offset;
use vezdehod\packs\ui\jsonui\element\types\Orientation;
use vezdehod\packs\ui\jsonui\element\types\Size;

interface IElementContainer {

    /**
     * @return array<string, Element>
     */
    public function getElements(): array;

    public function addElement(Element $elem): static;

    public function addExtends(string $control, string|IResolvable $extends): ExtendsElement;

    public function addPanel(string $control, ?Size $size = null, ?Offset $offset = null): PanelElement;

    public function addStackPanel(string $control, ?Orientation $orientation = null): StackPanelElement;

    public function addGrid(string $control, ?IntVec2 $dimensions = null): GridElement;

    public function addLabel(string $control, ?string $text = null): LabelElement;

    public function addImage(string $control, ?string $texture = null): ImageElement;

    public function addInputPanel(string $control): InputPanelElement;

    public function addButton(string $control): ButtonElement;

    public function addToggle(string $control): ToggleElement;

    public function addDropdown(string $control): DropdownElement;

    public function addSlider(string $control): SliderElement;

    public function addSliderBox(string $control): SliderBoxElement;

    public function addEditBox(string $control): EditBoxElement;

    public function addScrollView(string $control): ScrollViewElement;

    public function addScrollTrack(string $control): ScrollbarTrackElement;

    public function addScrollBox(string $control): ScrollbarBoxElement;

    public function addFactory(string $control): FactoryElement;

    public function addScreen(string $control): ScreenElement;

    public function addCustom(string $control): CustomElement;

    public function addSelectionWheel(string $control): SelectionWheelElement;
}