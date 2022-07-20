<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\ui\jsonui\IResolvable;
use vezdehod\packs\utils\JsonSerializer;

/**
 * TODO: Rewrite this to user-friendly API
 */
class FocusContainer implements JsonSerializable {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#focus-container-custom-array-object

    // TODO: Is it non-nullable?
    public string|IResolvable|null $other_focus_container_name = null; // Name of the UI control that will receive focus when on button.menu_left, button.menu_right, button.menu_up or button.menu_down
    public string|IResolvable|null $focus_id_Inside = null; // Identifier (focus_identifier) of the focusable child control of the other_focus_container_name that will recieve the focus

    public function jsonSerialize(): array {
        return JsonSerializer::nonNullableOf($this);
    }
}