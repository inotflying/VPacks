<?php

namespace vezdehod\packs\ui\jsonui\expression\condition\switcher;

use vezdehod\packs\ui\jsonui\binding\Binding;
use vezdehod\packs\ui\jsonui\binding\DataBinding;
use vezdehod\packs\ui\jsonui\element\Element;
use vezdehod\packs\ui\jsonui\element\types\Size;
use vezdehod\packs\ui\jsonui\expression\condition\ConditionFactory;
use vezdehod\packs\ui\jsonui\IElementContainer;
use vezdehod\packs\ui\jsonui\utils\InvisibleTrigger;
use function array_keys;
use function array_map;
use function count;

class BindingSwitcher implements ISwitcher {

    /** @var array<string, string> */
    private array $elements = [];

    public function __construct(
        private Binding           $binding,
        private IElementContainer $container,
        private string            $defaultElement
    ) {

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
        if (count($this->elements) === 0) {
            return $this->container->addExtends($switcherName, $this->defaultElement);
        }

        $panel = $this->container->addPanel($switcherName, new Size(Size::ofParent(100), Size::ofParent(100)));
        $panel->addExtends("long_form", $this->defaultElement)
            ->binding(DataBinding::visibleIf(ConditionFactory::and(...array_map(
                fn($trigger) => ConditionFactory::notContains($this->binding, $trigger),
                array_keys($this->elements)
            ))));
        foreach ($this->elements as $trigger => $element) {
            $panel->addExtends(InvisibleTrigger::getTriggerName($trigger), $element)
                ->binding(DataBinding::visibleIf(ConditionFactory::contains($this->binding, $trigger)));
        }


        return $panel;
    }

}