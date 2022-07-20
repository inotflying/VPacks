<?php

namespace vezdehod\packs\ui\jsonui\element;

use vezdehod\packs\ui\jsonui\element\properties\ButtonProperties;
use vezdehod\packs\ui\jsonui\element\properties\CollectionProperties;
use vezdehod\packs\ui\jsonui\element\properties\DataBindingProperties;
use vezdehod\packs\ui\jsonui\element\properties\DropdownProperties;
use vezdehod\packs\ui\jsonui\element\properties\FactoryProperties;
use vezdehod\packs\ui\jsonui\element\properties\FocusProperties;
use vezdehod\packs\ui\jsonui\element\properties\GridProperties;
use vezdehod\packs\ui\jsonui\element\properties\InputProperties;
use vezdehod\packs\ui\jsonui\element\properties\LayoutProperties;
use vezdehod\packs\ui\jsonui\element\properties\ScreenProperties;
use vezdehod\packs\ui\jsonui\element\properties\ScrollViewProperties;
use vezdehod\packs\ui\jsonui\element\properties\SliderProperties;
use vezdehod\packs\ui\jsonui\element\properties\SoundProperties;
use vezdehod\packs\ui\jsonui\element\properties\SpriteProperties;
use vezdehod\packs\ui\jsonui\element\properties\StackPanelProperties;
use vezdehod\packs\ui\jsonui\element\properties\TextEditProperties;
use vezdehod\packs\ui\jsonui\element\properties\TextProperties;
use vezdehod\packs\ui\jsonui\element\properties\ToggleProperties;
use vezdehod\packs\ui\jsonui\IResolvable;
use vezdehod\packs\ui\jsonui\IUINamespace;
use vezdehod\packs\utils\JsonSerializer;

/**
 * TODO: Ugh this is so ugly... I think this MUST be removed
 *      Maybe something like $namespace->getPanel/Grid/StackPanel/whatever($controlName)?
 */
class ExtendsElement extends Element {
    use ButtonProperties;
    use CollectionProperties;
    use DataBindingProperties;
    use DropdownProperties;
    use FactoryProperties;
    use FocusProperties;
    use GridProperties;
    use InputProperties;
    use LayoutProperties;
    use ScreenProperties;
    use ScrollViewProperties;

    //use SliderBoxProperties; defined in ButtonPoperties
    use SliderProperties;
    use SoundProperties;
    use SpriteProperties;
    use StackPanelProperties;
    use TextEditProperties;
    use TextProperties;
    use ToggleProperties;

    public function __construct(IUINamespace $namespace, string $name, private string|IResolvable $extends, ?Element $parent = null) {
        parent::__construct($namespace, $name, $parent);
    }

    public function getEmbeddingName(): string { return "$this->name@$this->extends"; }

    public function jsonSerialize() {
        return JsonSerializer::asObject($this->properties); //Avoid 'type' property
    }
}