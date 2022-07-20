<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\element\types\Sound;
use vezdehod\packs\ui\jsonui\IResolvable;
use function array_merge;

trait SoundProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#sound

    /**
     * sound_name: Name of the sound defined in the RP/sounds/sound_definitions.json file that plays when the pressed event is fired
     * default: ???
     */
    public function soundName(string|IResolvable $val): static { return $this->prop('sound_name', $val); }

    public function getSoundName(): string|IResolvable { return $this->getProp('sound_name', false); }

    /**
     * sound_volume: Volume of the sound
     * default: ???
     */
    public function soundVolume(float|IResolvable $val): static { return $this->prop('sound_volume', $val); }

    public function getSoundVolume(): float|IResolvable { return $this->getProp('sound_volume', false); }

    /**
     * sound_name: Pitch of the sound
     * default: ???
     */
    public function soundPitch(float|IResolvable $val): static { return $this->prop('sound_name', $val); }

    public function getSoundPitch(): float|IResolvable { return $this->getProp('sound_name', false); }

    /**
     * sounds: Array of the sounds to play when the pressed event is fired
     * default: ???
     */
    public function sounds(array|IResolvable $val): static { return $this->prop('sounds', $val); }

    public function sound(Sound $sound): static { return $this->sounds(array_merge($this->getSounds(), [$sound])); }

    public function getSounds(): array|IResolvable { return $this->getProp('sounds', []); }
}