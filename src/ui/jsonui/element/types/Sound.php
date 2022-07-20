<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\ui\jsonui\IResolvable;
use vezdehod\packs\utils\JsonSerializer;

/**
 * TODO: Refactor to user-friendly
 *       @see JsonSerializer::nonNullableOf
 */
class Sound implements JsonSerializable {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#sound-array-object

    public string|IResolvable|null $sound_name = null; // Name of the sound defined in the RP/sounds/sound_definitions.json file that plays when the pressed event is fires
    public float|IResolvable|null $sound_volume = null; // Volume of the sound
    public float|IResolvable|null $sound_pitch = null; // Pitch of the sound
    public float|IResolvable|null $min_seconds_between_plays = null; // Array of the sounds to play when the pressed event is fired

    public function jsonSerialize(): array {
        return JsonSerializer::nonNullableOf($this);
    }
}