<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\ui\jsonui\IResolvable;
use vezdehod\packs\utils\JsonSerializer;

/**
 * TODO: refactor this to user-friendly style
 */
class Focus implements JsonSerializable {

    public string|IResolvable|null $focus_identifier = null;
    public string|IResolvable|null $focus_change_right = null;
    public string|IResolvable|null $focus_change_left = null;
    public string|IResolvable|null $focus_change_up = null;
    public string|IResolvable|null $focus_change_down = null;

    public function jsonSerialize(): array {
        return JsonSerializer::nonNullableOf($this);
    }
}