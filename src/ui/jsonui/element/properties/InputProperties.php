<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\button\ButtonMapping;
use vezdehod\packs\ui\jsonui\IResolvable;
use function array_merge;

trait InputProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#input

    /**
     * button_mappings: ???
     * default: ???
     * @see ButtonMapping
     */
    public function buttonMappings(array|IResolvable $mappings): static { return $this->prop('button_mappings', $mappings); }

    public function buttonMapping(ButtonMapping $mapping): static { return $this->buttonMappings(array_merge($this->getButtonMappings(), [$mapping])); }

    public function getButtonMappings(): array|IResolvable { return $this->getProp('button_mappings', []); }

    /**
     * modal: ???
     * default: ???
     */
    public function modal(bool|IResolvable $val): static { return $this->prop('modal', $val); }

    public function isModalInput(): bool|IResolvable { return $this->getPropBool('modal', false); }

    /**
     * inline_modal: ???
     * default: ???
     */
    public function inlineModal(bool|IResolvable $val): static { return $this->prop('inline_modal', $val); }

    public function isInlineModal(): bool|IResolvable { return $this->getPropBool('inline_modal', false); }

    /**
     * always_listen_to_input: ???
     * default: ???
     */
    public function alwaysListenToInput(bool|IResolvable $val): static { return $this->prop('always_listen_to_input', $val); }

    public function isAlwaysListenToInput(): bool|IResolvable { return $this->getPropBool('always_listen_to_input', false); }

    /**
     * always_handle_pointer: ???
     * default: ???
     */
    public function alwaysHandlePointer(bool|IResolvable $val): static { return $this->prop('always_handle_pointer', $val); }

    public function isAlwaysHandlePointer(): bool|IResolvable { return $this->getPropBool('always_handle_pointer', false); }

    /**
     * always_handle_controller_direction: ???
     * default: ???
     */
    public function alwaysHandleControllerDirection(bool|IResolvable $val): static { return $this->prop('always_handle_controller_direction', $val); }

    public function isAlwaysHandleControllerDirection(): bool|IResolvable { return $this->getPropBool('always_handle_controller_direction', false); }

    /**
     * hover_enabled: ???
     * default: ???
     */
    public function hoverEnabled(bool|IResolvable $val): static { return $this->prop('hover_enabled', $val); }

    public function isHoverEnabled(): bool|IResolvable { return $this->getPropBool('hover_enabled', false); }

    /**
     * prevent_touch_input: ???
     * default: ???
     */
    public function preventTouchInput(bool|IResolvable $val): static { return $this->prop('prevent_touch_input', $val); }

    public function isPreventTouchInput(): bool|IResolvable { return $this->getPropBool('prevent_touch_input', false); }

    /**
     * consume_event: ???
     * default: ???
     */
    public function consumeEvent(bool|IResolvable $val): static { return $this->prop('consume_event', $val); }

    public function isConsumeEvent(): bool|IResolvable { return $this->getPropBool('consume_event', false); }

    /**
     * consume_hover_events: ???
     * default: ???
     */
    public function consumeHoverEvents(bool|IResolvable $val): static { return $this->prop('consume_hover_events', $val); }

    public function isConsumeHoverEvents(): bool|IResolvable { return $this->getPropBool('consume_hover_events', false); }

    /**
     * gesture_tracking_button: ???
     * default: ???
     */
    public function gestureTrackingButton(string|IResolvable $val): static { return $this->prop('gesture_tracking_button', $val); }

    public function getGestureTrackingButton(): string|IResolvable { return $this->getProp('gesture_tracking_button', ""); }

}