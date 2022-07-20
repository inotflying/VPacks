<?php

namespace vezdehod\packs\ui\jsonui\anims;

use JsonSerializable;
use vezdehod\packs\ui\jsonui\element\types\IntVec2;
use vezdehod\packs\ui\jsonui\IResolvable;
use vezdehod\packs\utils\JsonSerializer;

/**
 * TODO: Refactor using schemas and introduce user-friendly factories
 */
class Animation implements JsonSerializable {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#animations
    // For more information about the aseprite_flip_book animation type, please see our page on Aseprite Animations

    public string|IResolvable|null $anim_type = null; // ???
    public int|IResolvable|null $duration = null; // ???
    public string|IResolvable|null $next = null; // ???
    public string|IResolvable|null $destroy_at_end = null; // ???
    public string|IResolvable|null $play_event = null; // ???
    public string|IResolvable|null $end_event = null; // ???
    public string|IResolvable|null $start_event = null; // ???
    public string|IResolvable|null $reset_event = null; // ???
    public AnimType|IResolvable|null $easing = null; // ???
    public string|IResolvable|null $from = null; // ???
    public string|IResolvable|null $to = null; // ???
    public IntVec2|IResolvable|null $initial_uv = null; // ???
    public int|IResolvable|null $fps = null; // Frames per second
    public int|IResolvable|null $frame_count = null; // ???
    public int|IResolvable|null $frame_step = null; // ???
    public bool|IResolvable|null $reversible = null; // ???
    public bool|IResolvable|null $resettable = null; // ???
    public bool|IResolvable|null $scale_from_starting_alpha = null; // ???
    public bool|IResolvable|null $activated = null; // ???

    public function jsonSerialize() {
        return JsonSerializer::nonNullableOf($this);
    }
}