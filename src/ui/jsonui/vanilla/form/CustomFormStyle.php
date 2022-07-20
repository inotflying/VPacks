<?php

namespace vezdehod\packs\ui\jsonui\vanilla\form;

use vezdehod\packs\ui\jsonui\BaseUINamespace;
use vezdehod\packs\ui\jsonui\binding\Binding;
use vezdehod\packs\ui\jsonui\collection\Collection;

class CustomFormStyle extends BaseUINamespace implements IFormStyle {

    private const UI_UNIQUE_ID = "cstm";


    use FormStyleTrait;

    public static function getCustomFormItems(): Collection { return new Collection("custom_form"); }

    public static function getCustomFormLengthBinding(): Binding { return new Binding("custom_form_length"); }

    public static function getCustomSubmitVisibleBinding(): Binding { return new Binding("submit_button_visible"); }

    public static function getCustomTextBinding(): Binding { return new Binding("custom_text"); }

    public static function getCustomToggleStateBinding(): Binding { return new Binding("custom_toggle_state"); }

    public static function getCustomToggleEnabledBinding(): Binding { return new Binding("custom_toggle_enabled"); }

    public static function getCustomSliderTextBinding(): Binding { return new Binding("custom_slider_text"); }

    public static function getCustomSliderValueBinding(): Binding { return new Binding("custom_slider_value"); }

    public static function getCustomSliderTextValueBinding(): Binding { return new Binding("custom_slider_text_value"); }

    public static function getCustomSliderEnabledBinding(): Binding { return new Binding("custom_slider_enabled"); }

    public static function getCustomSliderStepTextBinding(): Binding { return new Binding("custom_slider_step_text"); }

    public static function getCustomSliderStepValueBinding(): Binding { return new Binding("custom_slider_step_value"); }

    public static function getCustomSliderStepTextValueBinding(): Binding { return new Binding("custom_slider_step_text_value"); }

    public static function getCustomSliderStepsBinding(): Binding { return new Binding("custom_slider_steps"); }

    public static function getCustomDropdownBinding(): Collection { return new Collection("custom_dropdown"); }

    public static function getCustomDropdownLengthBinding(): Binding { return new Binding("custom_dropdown_length"); }

    public static function getCustomRadioToggledBinding(): Binding { return new Binding("custom_radio_toggled"); }

    public static function getCustomRadioTextBinding(): Binding { return new Binding("custom_radio_text"); }


    public static function getCustomInputTextBinding(): Binding { return new Binding("custom_input_text"); }

    public static function getCustomPlaceholderTextBinding(): Binding { return new Binding("custom_placeholder_text"); }

    public static function getCustomInputEnabledBinding(): Binding { return new Binding("custom_input_enabled"); }

    public function getDecorator(): IFormDecorator {
        return new CustomFormDecorator($this->getTrigger());
    }
}