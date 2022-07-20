<?php

namespace vezdehod\packs\ui\jsonui\modification;

use JsonSerializable;
use vezdehod\packs\ui\jsonui\IResolvable;
use vezdehod\packs\utils\JsonSerializer;

/**
 * TODO: Refactor using schemas and introduce user-friendly factories
 */
class Modification implements JsonSerializable {
    public const OPERATION_INSERT_BACK = "insert_back";
    public const OPERATION_INSERT_FRONT = "insert_front";
    public const OPERATION_INSERT_AFTER = "insert_after";
    public const OPERATION_INSERT_BEFORE = "insert_before";
    public const OPERATION_MOVE_BACK = "move_back";
    public const OPERATION_MOVE_FRONT = "move_front";
    public const OPERATION_MOVE_AFTER = "move_after";
    public const OPERATION_MOVE_BEFORE = "move_before";
    public const OPERATION_SWAP = "swap";
    public const OPERATION_REMOVE = "remove";
    public const OPERATION_REPLACE = "replace";

    public string|IResolvable|null $operation = null;
    public string|IResolvable|null $array_name = null;
    public string|IResolvable|null $control_name = null;
    public string|IResolvable|null $target_control = null;
    public array|IResolvable|null $where = null;
    public array|IResolvable|null $target = null;
    public array|IResolvable|null $value = null;


    public function jsonSerialize() {
        return JsonSerializer::nonNullableOf($this);
    }
}