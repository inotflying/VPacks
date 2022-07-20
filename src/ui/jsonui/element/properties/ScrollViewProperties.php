<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\IResolvable;

trait ScrollViewProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#scroll-view

    /**
     * scrollbar_track_button: ID of the action for the track button
     * default: ???
     */
    public function scrollbarTrackButton(string|IResolvable $val): static { return $this->prop('scrollbar_track_button', $val); }

    public function getScrollbarTrack_button(): string|IResolvable { return $this->getProp('scrollbar_track_button', ""); }

    /**
     * scrollbar_touch_button: ID of the action for the touch input
     * default: ???
     */
    public function scrollbarTouchButton(string|IResolvable $val): static { return $this->prop('scrollbar_touch_button', $val); }

    public function getScrollbarTouchButton(): string|IResolvable { return $this->getProp('scrollbar_touch_button', ""); }

    /**
     * scroll_speed: Scrolling speed
     * default: ???
     */
    public function scrollSpeed(float|IResolvable $val): static { return $this->prop('scroll_speed', $val); }

    public function getScrollSpeed(): float|IResolvable { return $this->getProp('scroll_speed', 1.0); }

    /**
     * gesture_control_enabled: ???
     * default: ???
     */
    public function gestureControlEnabled(bool|IResolvable $val): static { return $this->prop('gesture_control_enabled', $val); }

    public function isGestureControlEnabled(): bool|IResolvable { return $this->getPropBool('gesture_control_enabled', false); }

    /**
     * always_handle_scrolling: ???
     * default: ???
     */
    public function alwaysHandleScrolling(bool|IResolvable $val): static { return $this->prop('always_handle_scrolling', $val); }

    public function isAlwaysHandleScrolling(): bool|IResolvable { return $this->getPropBool('always_handle_scrolling', false); }

    /**
     * touch_mode: ???
     * default: ???
     */
    public function touchMode(bool|IResolvable $val): static { return $this->prop('touch_mode', $val); }

    public function isTouchMode(): bool|IResolvable { return $this->getPropBool('touch_mode', false); }

    /**
     * scrollbar_box: Name of child UI element or nested UI element that will behave as the scrollbar thumb.
     * default: ???
     */
    public function scrollbarBox(string|IResolvable $val): static { return $this->prop('scrollbar_box', $val); }

    public function getScrollbarBox(): string|IResolvable { return $this->getProp('scrollbar_box', ""); }

    /**
     * scrollbar_track: Name of child UI element or nested UI element that will behave as the scrollbar track
     * default: ???
     */
    public function scrollbarTrack(string|IResolvable $val): static { return $this->prop('scrollbar_track', $val); }

    public function getScrollbarTrack(): string|IResolvable { return $this->getProp('scrollbar_track', ""); }

    /**
     * scroll_view_port: Name of child UI element that will behave as the view port
     * default: ???
     */
    public function scrollViewPort(string|IResolvable $val): static { return $this->prop('scroll_view_port', $val); }

    public function getScrollViewPort(): string|IResolvable { return $this->getProp('scroll_view_port', ""); }

    /**
     * scroll_content: Name of child UI element that will behave as the content root parent
     * default: ???
     */
    public function scrollContent(string|IResolvable $val): static { return $this->prop('scroll_content', $val); }

    public function getScrollContent(): string|IResolvable { return $this->getProp('scroll_content', ""); }

    /**
     * scroll_box_and_track_panel: Name of child UI element that will contain the scrollbox and track controls
     * default: ???
     */
    public function scrollBoxAndTrackPanel(string|IResolvable $val): static { return $this->prop('scroll_box_and_track_panel', $val); }

    public function getScrollBoxAndTrackPanel(): string|IResolvable { return $this->getProp('scroll_box_and_track_panel', ""); }

    /**
     * jump_to_bottom_on_update: Jump to the bottom when the scrolling panel has an update. For example, adds more children to it.
     * default: ???
     */
    public function jumpToBottomOnUpdate(bool|IResolvable $val): static { return $this->prop('jump_to_bottom_on_update', $val); }

    public function isJumpToBottomOnUpdate(): bool|IResolvable { return $this->getPropBool('jump_to_bottom_on_update', false); }
}