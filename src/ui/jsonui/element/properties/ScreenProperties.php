<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\IResolvable;

trait ScreenProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#collection

    /**
     * render_only_when_topmost: Only render the screen if it's the most top screen in the screen stack
     * default: ???
     */
    public function renderOnlyWhenTopmost(bool|IResolvable $val): static { return $this->prop('render_only_when_topmost', $val); }

    public function isRenderOnlyWhenTopmost(): bool|IResolvable { return $this->getPropBool('render_only_when_topmost', false); }

    /**
     * screen_not_flushable: ???
     * default: ???
     */
    public function screenNotFlushable(bool|IResolvable $val): static { return $this->prop('screen_not_flushable', $val); }

    public function isScreenNotFlushable(): bool|IResolvable { return $this->getPropBool('screen_not_flushable', false); }

    /**
     * always_accepts_input: ???
     * default: ???
     */
    public function alwaysAcceptsInput(bool|IResolvable $val): static { return $this->prop('always_accepts_input', $val); }

    public function isAlwaysAcceptsInput(): bool|IResolvable { return $this->getPropBool('always_accepts_input', false); }

    /**
     * render_game_behind: Doesn't prevent screen below of being able to receive input from the user
     * default: ???
     */
    public function renderGameBehind(bool|IResolvable $val): static { return $this->prop('render_game_behind', $val); }

    public function isGameBehindRenders(): bool|IResolvable { return $this->getPropBool('render_game_behind', false); }

    /**
     * absorbs_input: ???
     * default: ???
     */
    public function absorbsInput(bool|IResolvable $val): static { return $this->prop('absorbs_input', $val); }

    public function getAbsorbsInput(): bool|IResolvable { return $this->getPropBool('absorbs_input', false); }

    /**
     * is_showing_menu: ???
     * default: ???
     */
    public function isShowingMenu(bool|IResolvable $val): static { return $this->prop('is_showing_menu', $val); }

    public function getIsShowingMenu(): bool|IResolvable { return $this->getPropBool('is_showing_menu', false); }

    /**
     * is_modal: It's a screen modal
     * default: ???
     */
    public function isModal(bool|IResolvable $val): static { return $this->prop('is_modal', $val); }

    public function getIsModal(): bool|IResolvable { return $this->getPropBool('is_modal', false); }

    /**
     * should_steal_mouse: Captures the cursor and hides it
     * default: ???
     */
    public function shouldStealMouse(bool|IResolvable $val): static { return $this->prop('should_steal_mouse', $val); }

    public function isShouldStealMouse(): bool|IResolvable { return $this->getPropBool('should_steal_mouse', false); }

    /**
     * low_frequency_rendering: Uses less memory to render the screen
     * default: ???
     */
    public function lowFrequencyRendering(bool|IResolvable $val): static { return $this->prop('low_frequency_rendering', $val); }

    public function isLowFrequencyRendering(): bool|IResolvable { return $this->getPropBool('low_frequency_rendering', false); }

    /**
     * screen_draws_last: It's the last screen to be drawn/rendered
     * default: ???
     */
    public function screenDrawsLast(bool|IResolvable $val): static { return $this->prop('screen_draws_last', $val); }

    public function getScreenDrawsLast(): bool|IResolvable { return $this->getPropBool('screen_draws_last', false); }

    /**
     * vr_mode: ???
     * default: ???
     */
    public function vrMode(bool|IResolvable $val): static { return $this->prop('vr_mode', $val); }

    public function isVRMode(): bool|IResolvable { return $this->getPropBool('vr_mode', false); }

    /**
     * force_render_below: Renders bottom screens below current screen in the screen stack
     * default: ???
     */
    public function forceRenderBelow(bool|IResolvable $val): static { return $this->prop('force_render_below', $val); }

    public function getForceRenderBelow(): bool|IResolvable { return $this->getPropBool('force_render_below', false); }

    /**
     * send_telemetry: ???
     * default: ???
     */
    public function sendTelemetry(bool|IResolvable $val): static { return $this->prop('send_telemetry', $val); }

    public function isSendingTelemetry(): bool|IResolvable { return $this->getPropBool('send_telemetry', false); }

    /**
     * close_on_player_hurt: Close the screen is the player takes damage
     * default: ???
     */
    public function closeOnPlayerHurt(bool|IResolvable $val): static { return $this->prop('close_on_player_hurt', $val); }

    public function isCloseOnPlayerHurt(): bool|IResolvable { return $this->getPropBool('close_on_player_hurt', false); }

    /**
     * cache_screen: ???
     * default: ???
     */
    public function cacheScreen(bool|IResolvable $val): static { return $this->prop('cache_screen', $val); }

    public function hasCacheScreen(): bool|IResolvable { return $this->getPropBool('cache_screen', false); }

    /**
     * load_screen_immediately: ???
     * default: ???
     */
    public function loadScreenImmediately(bool|IResolvable $val): static { return $this->prop('load_screen_immediately', $val); }

    public function isScreenLoadingImmediately(): bool|IResolvable { return $this->getPropBool('load_screen_immediately', false); }

    /**
     * gamepad_cursor: ???
     * default: ???
     */
    public function gamepadCursor(bool|IResolvable $val): static { return $this->prop('gamepad_cursor', $val); }

    public function isGamepadCursor(): bool|IResolvable { return $this->getPropBool('gamepad_cursor', false); }

    /**
     * gamepad_cursor_deflection_mode: ???
     * default: ???
     */
    public function gamepadCursorDeflectionMode(bool|IResolvable $val): static { return $this->prop('gamepad_cursor_deflection_mode', $val); }

    public function isGamepadCursorDeflectionMode(): bool|IResolvable { return $this->getPropBool('gamepad_cursor_deflection_mode', false); }

    /**
     * should_be_skipped_during_automation: ???
     * default: ???
     */
    public function shouldBeSkippedDuringAutomation(bool|IResolvable $val): static { return $this->prop('should_be_skipped_during_automation', $val); }

    public function isShouldBeSkippedDuringAutomation(): bool|IResolvable { return $this->getPropBool('should_be_skipped_during_automation', false); }
}