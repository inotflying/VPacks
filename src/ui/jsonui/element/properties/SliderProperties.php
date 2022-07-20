<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\collection\Collection;
use vezdehod\packs\ui\jsonui\element\types\Orientation;
use vezdehod\packs\ui\jsonui\IResolvable;

trait SliderProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#slider

    /**
     * slider_track_button: ID of the action for the slider track
     * default: ???
     */
    public function sliderTrackButton(string|IResolvable $val): static { return $this->prop('slider_track_button', $val); }

    public function getSliderTrackButton(): string|IResolvable { return $this->getProp('slider_track_button', ""); }

    /**
     * slider_small_decrease_button: ID of the action for the decrease slider
     * default: ???
     */
    public function sliderSmallDecreaseButton(string|IResolvable $val): static { return $this->prop('slider_small_decrease_button', $val); }

    public function getSliderSmallDecreaseButton(): string|IResolvable { return $this->getProp('slider_small_decrease_button', ""); }

    /**
     * slider_small_increase_button: ID of the action for the increase slider
     * default: ???
     */
    public function sliderSmallIncreaseButton(string|IResolvable $val): static { return $this->prop('slider_small_increase_button', $val); }

    public function getSliderSmallIncreaseButton(): string|IResolvable { return $this->getProp('slider_small_increase_button', ""); }

    /**
     * slider_steps: nHow many steps (or values) does the slider have
     * default: ???
     */
    public function sliderSteps(int|IResolvable $val): static { return $this->prop('slider_steps', $val); }

    public function getSliderSteps(): int|IResolvable { return $this->getProp('slider_steps', ""); }

    /**
     * slider_direction: Orientation of the slider movement.
     * default: ???
     */
    public function sliderDirection(Orientation|IResolvable $val): static { return $this->prop('slider_direction', $val instanceof Orientation ? $val->or(Orientation::VERTICAL()) : $val); }

    public function getSliderDirection(): Orientation|IResolvable { return $this->getProp('slider_direction', ""); }

    /**
     * slider_timeout: ???
     * default: ???
     */
    public function sliderTimeout(int|IResolvable $val): static { return $this->prop('slider_timeout', $val); }

    public function getSliderTimeout(): int|IResolvable { return $this->getProp('slider_timeout', ""); }

    /**
     * slider_collection_name: Name of the collection the slider belongs to
     * default: ???
     */
    public function sliderCollectionName(string|Collection|IResolvable $val): static { return $this->prop('slider_collection_name', $val); }

    public function getSliderCollectionName(): string|Collection|IResolvable { return $this->getProp('slider_collection_name', ""); }

    /**
     * slider_name: Identifier for the slider
     * default: ???
     */
    public function sliderName(string|IResolvable $val): static { return $this->prop('slider_name', $val); }

    public function getSliderName(): string|IResolvable { return $this->getProp('slider_name', ""); }

    /**
     * slider_select_on_hover: Focus slider when it's hovered
     * default: ???
     */
    public function sliderSelectOnHover(bool|IResolvable $val): static { return $this->prop('slider_select_on_hover', $val); }

    public function isSliderSelectOnHover(): bool|IResolvable { return $this->getPropBool('slider_select_on_hover', false); }

    /**
     * slider_selected_button: ID of the action for when the slider is selected
     * default: ???
     */
    public function sliderSelectedButton(string|IResolvable $val): static { return $this->prop('slider_selected_button', $val); }

    public function getSliderSelectedButton(): string|IResolvable { return $this->getProp('slider_selected_button', ""); }

    /**
     * slider_deselected_button: ID of the action for when the slider is deselected
     * default: ???
     */
    public function sliderDeselectedButton(string|IResolvable $val): static { return $this->prop('slider_deselected_button', $val); }

    public function getSliderDeselectedButton(): string|IResolvable { return $this->getProp('slider_deselected_button', ""); }

    /**
     * background_control: Name of the child control that will behave as the slider thumb
     * default: ???
     */
    public function sliderBoxControl(string|IResolvable $val): static { return $this->prop('slider_box_control', $val); }

    public function getSliderBoxControl(): string|IResolvable { return $this->getProp('slider_box_control', ""); }

    /**
     * background_control: Name of the child control that will behave as the slider background
     * default: ???
     */
    public function backgroundControl(string|IResolvable $val): static { return $this->prop('background_control', $val); }

    public function getBackgroundControl(): string|IResolvable { return $this->getProp('background_control', ""); }

    /**
     * background_hover_control: Name of the child control that will behave as the slider background on hover
     * default: ???
     */
    public function backgroundHoverControl(string|IResolvable $val): static { return $this->prop('background_hover_control', $val); }

    public function getBackgroundHoverControl(): string|IResolvable { return $this->getProp('background_hover_control', ""); }

    /**
     * progress_control: Name of the child control that will behave as the slider background overlay for the slider progress
     * default: ???
     */
    public function progressControl(string|IResolvable $val): static { return $this->prop('progress_control', $val); }

    public function getProgressControl(): string|IResolvable { return $this->getProp('progress_control', ""); }

    /**
     * progress_hover_control: Name of the child control that will behave as the slider background overlay for the slider progress on hover
     * default: ???
     */
    public function progressHoverControl(string|IResolvable $val): static { return $this->prop('progress_hover_control', $val); }

    public function getProgressHoverControl(): string|IResolvable { return $this->getProp('progress_hover_control', ""); }

}