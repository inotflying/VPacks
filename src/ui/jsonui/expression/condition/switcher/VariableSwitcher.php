<?php

namespace vezdehod\packs\ui\jsonui\expression\condition\switcher;

use vezdehod\packs\ui\jsonui\element\Element;
use vezdehod\packs\ui\jsonui\expression\condition\ConditionFactory;
use vezdehod\packs\ui\jsonui\expression\condition\VariableCondition;
use vezdehod\packs\ui\jsonui\IElementContainer;
use vezdehod\packs\ui\jsonui\variable\Variable;

class VariableSwitcher implements ISwitcher {

    /** @var array<string, string> */
    private array $elements = [];
    private Variable $dependsVariable;

    public function __construct(
        private Variable          $variable,
        private IElementContainer $container,
        private string            $defaultElement
    ) {
        $this->dependsVariable = new Variable("depends_on_{$this->variable->getWithoutPrefix()}");
    }

    public function ifContains(string $trigger, string $elemId): static {
        $this->elements[$trigger] = $elemId;
        return $this;
    }

    public function orElse(string $elemId): static {
        $this->defaultElement = $elemId;
        return $this;
    }

    public function createSwitcher(string $switcherName): Element {
        $panel = $this->container->addPanel($switcherName);

        $panel->setVarDefault($this->dependsVariable, $this->defaultElement);
        foreach ($this->elements as $trigger => $element) {
            $panel->setVariableIf((new VariableCondition(ConditionFactory::contains($this->variable, $trigger)))
                ->set($this->dependsVariable, $element)
            );
        }
        $panel->addExtends("impl", $this->dependsVariable);

        return $panel;
    }
}