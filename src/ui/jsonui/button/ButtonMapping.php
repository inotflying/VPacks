<?php

namespace vezdehod\packs\ui\jsonui\button;

use JsonSerializable;
use vezdehod\packs\ui\jsonui\IResolvable;
use vezdehod\packs\utils\JsonSerializer;

/**
 * TODO: Rewrite this to avoid god-use case.
 */
class ButtonMapping implements JsonSerializable {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#button-mapping-array-object

    public static function global(string $from, string $to): ButtonMapping {
        $mapping = new self();
        $mapping->mapping_type = MappingType::GLOBAL();
        $mapping->from_button_id = $from;
        $mapping->to_button_id = $to;

        return $mapping;
    }

    public bool|IResolvable|null $ignored = null; // If mapping should be ignored
    public string|IResolvable|null $from_button_id = null; // ID of the action that fires the event
    public string|IResolvable|null $to_button_id = null; // ID of the action to be executed when event is fired
    public MappingType|IResolvable|null $mapping_type = null; // ??
    public MappingScope|IResolvable|null $scope = null; // ??
    public InputModeCondition|IResolvable|null $input_mode_condition = null; // ??
    public bool|IResolvable|null $ignore_input_scope = null; // ???
    public bool|IResolvable|null $consume_event = null; // ???
    public bool|IResolvable|null $handle_select = null; // ???
    public bool|IResolvable|null $handle_deselect = null; // ???
    public bool|IResolvable|null $button_up_right_of_first_refusal = null; // ???


    public function jsonSerialize() {
        return JsonSerializer::nonNullableOf($this);
    }
}