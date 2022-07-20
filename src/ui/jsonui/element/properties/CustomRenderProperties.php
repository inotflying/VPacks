<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\element\types\Color;
use vezdehod\packs\ui\jsonui\element\types\Orientation;
use vezdehod\packs\ui\jsonui\element\types\Rotation;
use vezdehod\packs\ui\jsonui\IResolvable;

trait CustomRenderProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#custom-render

    /**
     * renderer: ???
     * default: ???
     */
    public function renderer(string|IResolvable $renderer): static { return $this->prop('renderer', $renderer); }

    public function getRenderer(): string|IResolvable { return $this->getProp('renderer', ''); }

    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#specific-properties

    /**
     * gradient_direction: ???
     * default: ???
     */
    public function gradientDirection(Orientation|IResolvable $orientation): static { return $this->prop('gradient_direction', $orientation); }

    public function getGradientDirection(): Orientation|IResolvable { return $this->getProp('gradient_direction', Orientation::NONE()); }

    /**
     * color1: ???
     * default: ???
     */
    public function color1(Color|IResolvable $color): static { return $this->prop('color1', $color instanceof Color ? $color->withAlpha() : $color); }

    public function getColor1(): Color|IResolvable { return $this->getProp('color1', Color::white(true)); }

    /**
     * color2: ???
     * default: ???
     */
    public function color2(Color|IResolvable $color): static { return $this->prop('color2', $color instanceof Color ? $color->withAlpha() : $color); }

    public function getColor2(): Color|IResolvable { return $this->getProp('color2', Color::white(true)); }

    /**
     * text_color: ???
     * default: ???
     */
    public function textColor(Color|IResolvable $color): static { return $this->prop('text_color', $color instanceof Color ? $color->withAlpha() : $color); }

    public function getTextColor(): Color|IResolvable { return $this->getProp('text_color', Color::white(true)); }

    /**
     * background_color: ???
     * default: ???
     */
    public function backgroundColor(Color|IResolvable $color): static { return $this->prop('background_color', $color instanceof Color ? $color->withAlpha() : $color); }

    public function getBackgroundColor(): Color|IResolvable { return $this->getProp('background_color', Color::white(true)); }

    /**
     * primary_color: ???
     * default: ???
     */
    public function primaryColor(Color|IResolvable $color): static { return $this->prop('primary_color', $color instanceof Color ? $color->withAlpha() : $color); }

    public function getPrimaryColor(): Color|IResolvable { return $this->getProp('primary_color', Color::white(true)); }

    /**
     * secondary_color': ???
     * default: ???
     */
    public function secondaryColor(Color|IResolvable $color): static { return $this->prop('secondary_color', $color instanceof Color ? $color->withAlpha() : $color); }

    public function getSecondaryColor(): Color|IResolvable { return $this->getProp('secondary_color', Color::white(true)); }

    /**
     * camera_tilt_degrees: ???
     * default: ???
     */
    public function cameraTiltDegrees(int|IResolvable $color): static { return $this->prop('camera_tilt_degrees', $color); }

    public function getCameraTiltDegrees(): int|IResolvable { return $this->getProp('camera_tilt_degrees', 0); }

    /**
     * starting_rotation: ???
     * default: ???
     */
    public function startingRotation(int|IResolvable $color): static { return $this->prop('starting_rotation', $color); }

    public function getStartingRotation(): int|IResolvable { return $this->getProp('starting_rotation', 0); }

    /**
     * use_selected_skin: ???
     * default: ???
     */
    public function useSelectedSkin(bool|IResolvable $use): static { return $this->prop('use_selected_skin', $use); }

    public function isUseSelectedSkin(): bool|IResolvable { return $this->getPropBool('use_selected_skin', false); }

    /**
     * use_uuid: ???
     * default: ???
     */
    public function useUuid(bool|IResolvable $use): static { return $this->prop('use_uuid', $use); }

    public function isUseUuid(): bool|IResolvable { return $this->getPropBool('use_uuid', false); }

    /**
     * use_skin_gui_scale: ???
     * default: ???
     */
    public function useSkinGuiScale(bool|IResolvable $use): static { return $this->prop('use_skin_gui_scale', $use); }

    public function isUseSkinGuiScale(): bool|IResolvable { return $this->getPropBool('use_skin_gui_scale', false); }

    /**
     * use_player_paperdoll: ???
     * default: ???
     */
    public function usePlayerPaperdoll(bool|IResolvable $use): static { return $this->prop('use_player_paperdoll', $use); }

    public function isUsePlayerPaperdoll(): bool|IResolvable { return $this->getPropBool('use_player_paperdoll', false); }

    /**
     * rotation: ???
     * default: ???
     */
    public function rotation(Rotation|IResolvable $rotation): static { return $this->prop('rotation', $rotation); }

    public function getRotation(): Rotation|IResolvable { return $this->getProp('rotation', Rotation::AUTO()); }

    /**
     * end_event: ???
     * default: ???
     */
    public function endEvent(string|IResolvable $endEvent): static { return $this->prop('end_event', $endEvent); }

    public function getEndEvent(): string|IResolvable { return $this->getProp('end_event', ''); }
}