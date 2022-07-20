<?php

namespace vezdehod\packs\ui\jsonui\vanilla\form;

use vezdehod\packs\ui\jsonui\BaseUINamespace;
use vezdehod\packs\ui\jsonui\binding\Binding;
use vezdehod\packs\ui\jsonui\collection\Collection;

class SimpleFormStyle extends BaseUINamespace implements IFormStyle {

    private const UI_UNIQUE_ID = "smpl";

    use FormStyleTrait;

    public static function getFormButtons(): Collection { return new Collection("form_buttons"); }

    public static function getButtonsLengthBinding(): Binding { return new Binding("form_button_length"); }

    public static function getContentBinding(): Binding { return new Binding("form_text"); }

    public static function getButtonTextBinding(): Binding { return new Binding("form_button_text"); }

    public static function getButtonTextureBinding(): Binding { return new Binding("form_button_texture"); }

    public static function getButtonTextureFSBinding(): Binding { return new Binding("form_button_texture_file_system"); }

    public function getDecorator(): IFormDecorator {
        return new SimpleFormDecorator($this->getTrigger());
    }
}