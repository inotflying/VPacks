<?php

namespace vezdehod\packs\ui\jsonui\vanilla\form;

use pocketmine\plugin\Plugin;
use vezdehod\packs\ui\jsonui\element\Element;
use vezdehod\packs\ui\jsonui\utils\InvisibleTrigger;
use vezdehod\packs\utils\PrettyStringFactory;

trait FormStyleTrait {

    private string $rootElementName;

    private string $preferredPluginName;
    private string $prettyStyleName;

    public function __construct(private Plugin $plugin, private string $styleName) {
        $this->preferredPluginName = PrettyStringFactory::fromPlugin($this->plugin);
        $this->prettyStyleName = PrettyStringFactory::fromString($this->styleName);

        parent::__construct(
            $this->preferredPluginName . "_"  . $this->prettyStyleName . "_form",
            "ui/$this->preferredPluginName/forms/" . self::UI_UNIQUE_ID . "_" . $this->prettyStyleName . ".json"
        );

        $this->rootElementName = $this->preferredPluginName . "_" . self::UI_UNIQUE_ID . "_" . $this->prettyStyleName . "_index";
        $this->addPanel($this->rootElementName);
    }

    public function getTrigger(): string { return InvisibleTrigger::createTrigger($this->preferredPluginName . $this->styleName); }

    public function getRootName(): string { return $this->rootElementName; }

    public function setRootElement(Element $element): static {
        $this->rootElementName = $element->getName();
        $this->addElement($element);
        return $this;
    }
}