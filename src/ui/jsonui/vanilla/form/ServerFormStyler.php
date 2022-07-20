<?php

namespace vezdehod\packs\ui\jsonui\vanilla\form;

use vezdehod\packs\ui\jsonui\BaseUINamespace;
use vezdehod\packs\ui\jsonui\button\ButtonMapping;
use vezdehod\packs\ui\jsonui\button\HardcodedButtonIDs;
use vezdehod\packs\ui\jsonui\element\ScreenElement;
use vezdehod\packs\ui\jsonui\element\types\Size;
use vezdehod\packs\ui\jsonui\expression\condition\switcher\BindingSwitcher;
use vezdehod\packs\ui\jsonui\variable\Variable;

class ServerFormStyler extends BaseUINamespace {

    public const FORM_FACTORY_ELEMENT_ID = 'vpacks_form_factory';
    public const SIMPLE_FORM_SWITCHER_ELEMENT_ID = 'vpacks_simple_form_switcher';
    public const CUSTOM_FORM_SWITCHER_ELEMENT_ID = 'vpacks_custom_form_switcher';

    public const DEFAULT_SIMPLE_FORM_COMPONENT = 'long_form';
    public const DEFAULT_CUSTOM_FORM_COMPONENT = 'custom_form';


    private BindingSwitcher $simpleFormSwitcher;
    private BindingSwitcher $customFormSwitcher;

    private bool $changed = false;

    public function __construct() {
        parent::__construct("server_form", "ui/server_form.json");
        $formScreen = $this->addExtends("third_party_server_screen", "common.base_screen");
        $formScreen->setVar(new Variable("screen_content"), $this->elementId(self::FORM_FACTORY_ELEMENT_ID));
        $formScreen->buttonMapping(ButtonMapping::global(HardcodedButtonIDs::BUTTON_MENU_CANCEL, HardcodedButtonIDs::BUTTON_MENU_EXIT));
        $this->addElement($formScreen);

        $this->simpleFormSwitcher = new BindingSwitcher(ScreenElement::getTitleBinding(), $this, $this->elementId(self::DEFAULT_SIMPLE_FORM_COMPONENT));
        $this->customFormSwitcher = new BindingSwitcher(ScreenElement::getTitleBinding(), $this, $this->elementId(self::DEFAULT_CUSTOM_FORM_COMPONENT));
    }

    public function addSimpleFormStyle(SimpleFormStyle $style): void {
        $this->simpleFormSwitcher->ifContains($style->getTrigger(), $style->elementId($style->getRootName()));
        $this->changed = true;
    }

    public function addCustomFormStyle(CustomFormStyle $style): void {
        $this->customFormSwitcher->ifContains($style->getTrigger(), $style->elementId($style->getRootName()));
        $this->changed = true;
    }

    public function getElements(): array {
        if (!$this->changed) {
            return [];
        }
        $factory = $this->addPanel(self::FORM_FACTORY_ELEMENT_ID, new Size(Size::ofParent(100), Size::ofParent(100)));
        $factory->addFactory("server_form_factory")
            ->controlId('long_form', $this->elementId(self::SIMPLE_FORM_SWITCHER_ELEMENT_ID))
            ->controlId("custom_form", $this->elementId(self::CUSTOM_FORM_SWITCHER_ELEMENT_ID));

        $this->simpleFormSwitcher->createSwitcher(self::SIMPLE_FORM_SWITCHER_ELEMENT_ID);
        $this->customFormSwitcher->createSwitcher(self::CUSTOM_FORM_SWITCHER_ELEMENT_ID);

        return $this->elements;
    }


}