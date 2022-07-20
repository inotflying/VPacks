<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\element\types\Focus;
use vezdehod\packs\ui\jsonui\element\types\FocusChange;
use vezdehod\packs\ui\jsonui\element\types\FocusContainer;
use vezdehod\packs\ui\jsonui\element\types\FocusNavigationMode;
use vezdehod\packs\ui\jsonui\IResolvable;
use function array_merge;

trait FocusProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#focus

    /**
     * default_focus_precedence: ???
     * default: ???
     */
    public function defaultFocusPrecedence(int|IResolvable $val): static { return $this->prop('default_focus_precedence', $val); }

    public function getDefaultFocusPrecedence(): int|IResolvable { return $this->getProp('default_focus_precedence', 0); }

    /**
     * focus_enabled: If the arrow keys or controller can focus the element
     * default: ???
     */
    public function focusEnabled(bool|IResolvable $enabled): static { return $this->prop('focus_enabled', $enabled); }

    public function isFocusEnabled(): bool|IResolvable { return $this->getPropBool('focus_enabled', false); }

    /**
     * focus_wrap_enabled: ???
     * default: ???
     */
    public function focusWrapEnabled(bool|IResolvable $enabled): static { return $this->prop('focus_wrap_enabled', $enabled); }

    public function isFocusWrapEnabled(): bool|IResolvable { return $this->getPropBool('focus_wrap_enabled', false); }

    /**
     * focus_magnet_enabled: ???
     * default: ???
     */
    public function focusMagnetEnabled(bool|IResolvable $enabled): static { return $this->prop('focus_magnet_enabled', $enabled); }

    public function isFocusMagnetEnabled(): bool|IResolvable { return $this->getPropBool('focus_magnet_enabled', false); }

    /**
     * focus_identifier: Focus identifier for this element
     * default: ???
     */
    public function focusIdentifier(string|IResolvable $id): static { return $this->prop('focus_identifier', $id); }

    public function getFocusIdentifier(): string|IResolvable { return $this->getProp('focus_identifier', ""); }

    /**
     * focus_change_down: Identifier (focus_identifier) of the focusable element that will recieve focus when on button.menu_down. If you want to prevent the focus to escape from the bottom use FOCUS_OVERRIDE_STOP
     * default: ???
     */
    public function focusChangeDown(string|FocusChange|IResolvable $id): static { return $this->prop('focus_change_down', $id); }

    public function getFocusChangeDown(): string|FocusChange|IResolvable { return $this->getProp('focus_change_down', FocusChange::FOCUS_OVERRIDE_STOP()); }

    /**
     * focus_change_up: Identifier (focus_identifier) of the focusable element that will recieve focus when on button.menu_up. If you want to prevent the focus to escape from the top use FOCUS_OVERRIDE_STOP
     * default: ???
     */
    public function focusChangeUp(string|FocusChange|IResolvable $id): static { return $this->prop('focus_change_up', $id); }

    public function getFocusChangeUp(): string|FocusChange|IResolvable { return $this->getProp('focus_change_up', FocusChange::FOCUS_OVERRIDE_STOP()); }

    /**
     * focus_change_left: Identifier (focus_identifier) of the focusable element that will recieve focus when on button.menu_left. If you want to prevent the focus to escape from the left use FOCUS_OVERRIDE_STOP
     * default: ???
     */
    public function focusChangeLeft(string|FocusChange|IResolvable $id): static { return $this->prop('focus_change_left', $id); }

    public function getFocusChangeLeft(): string|FocusChange|IResolvable { return $this->getProp('focus_change_left', FocusChange::FOCUS_OVERRIDE_STOP()); }

    /**
     * focus_change_right: Identifier (focus_identifier) of the focusable element that will recieve focus when on button.menu_right. If you want to prevent the focus to escape from the right use FOCUS_OVERRIDE_STOP
     * default: ???
     */
    public function focusChangeRight(string|FocusChange|IResolvable $id): static { return $this->prop('focus_change_right', $id); }

    public function getFocusChangeRight(): string|FocusChange|IResolvable { return $this->getProp('focus_change_right', FocusChange::FOCUS_OVERRIDE_STOP()); }

    /**
     * focus_mapping: ???
     * default: ???
     * @param Focus[]|IResolvable $focus
     */
    public function focusMapping(array|IResolvable $focus): static { return $this->prop('focus_mapping', $focus); }

    public function addFocusMapping(Focus $focus): static { return $this->focusMapping(array_merge($this->getFocusMapping(), [$focus])); }

    /**
     * @return Focus[]|IResolvable
     */
    public function getFocusMapping(): array|IResolvable { return $this->getProp('focus_mapping', []); }

    /**
     * focus_container: ???
     * default: ???
     */
    public function focusContainer(bool|IResolvable $container): static { return $this->prop('focus_container', $container); }

    public function isFocusContainer(): bool|IResolvable { return $this->getPropBool('focus_container', false); }

    /**
     * use_last_focus: ???
     * default: ???
     */
    public function useLastFocus(bool|IResolvable $useLast): static { return $this->prop('use_last_focus', $useLast); }

    public function isUseLastFocus(): bool|IResolvable { return $this->getPropBool('use_last_focus', false); }

    /**
     * focus_navigation_mode_left: ???
     * default: ???
     */
    public function focusNavigationModeLeft(FocusNavigationMode|IResolvable $mode): static { return $this->prop('focus_navigation_mode_left', $mode); }

    public function getFocusNavigationModeLeft(): FocusNavigationMode|IResolvable { return $this->getProp('focus_navigation_mode_left', FocusChange::FOCUS_OVERRIDE_STOP()); }

    /**
     * focus_navigation_mode_right: ???
     * default: ???
     */
    public function focusNavigationModeRight(FocusNavigationMode|IResolvable $mode): static { return $this->prop('focus_navigation_mode_right', $mode); }

    public function getFocusNavigationModeRight(): FocusNavigationMode|IResolvable { return $this->getProp('focus_navigation_mode_right', FocusChange::FOCUS_OVERRIDE_STOP()); }

    /**
     * focus_navigation_mode_down: ???
     * default: ???
     */
    public function focusNavigationModeDown(FocusNavigationMode|IResolvable $mode): static { return $this->prop('focus_navigation_mode_down', $mode); }

    public function getFocusNavigationModeDown(): FocusNavigationMode|IResolvable { return $this->getProp('focus_navigation_mode_down', FocusChange::FOCUS_OVERRIDE_STOP()); }

    /**
     * focus_navigation_mode_up: ???
     * default: ???
     */
    public function focusNavigationModeUp(FocusNavigationMode|IResolvable $mode): static { return $this->prop('focus_navigation_mode_up', $mode); }

    public function getFocusNavigationModeUp(): FocusNavigationMode|IResolvable { return $this->getProp('focus_navigation_mode_up', FocusChange::FOCUS_OVERRIDE_STOP()); }

    /**
     * focus_container_custom_left: ???
     * default: ???
     */
    public function focusContainerCustomLeft(array|IResolvable $containers): static { return $this->prop('focus_container_custom_left', $containers); }

    public function addFocusContainerCustomLeft(FocusContainer $container): static { return $this->focusContainerCustomLeft(array_merge($this->getFocusContainerCustomLeft(), [$container])); }

    public function getFocusContainerCustomLeft(): array|IResolvable { return $this->getProp('focus_container_custom_left', []); }

    /**
     * focus_container_custom_right: ???
     * default: ???
     */
    public function focusContainerCustomRight(array|IResolvable $containers): static { return $this->prop('focus_container_custom_right', $containers); }

    public function addFocusContainerCustomRight(FocusContainer $container): static { return $this->focusContainerCustomRight(array_merge($this->getFocusContainerCustomRight(), [$container])); }

    public function getFocusContainerCustomRight(): array|IResolvable { return $this->getProp('focus_container_custom_right', []); }

    /**
     * focus_container_custom_down: ???
     * default: ???
     */
    public function focusContainerCustomDown(array|IResolvable $containers): static { return $this->prop('focus_container_custom_down', $containers); }

    public function addFocusContainerCustomDown(FocusContainer $container): static { return $this->focusContainerCustomDown(array_merge($this->getFocusContainerCustomDown(), [$container])); }

    public function getFocusContainerCustomDown(): array|IResolvable { return $this->getProp('focus_container_custom_down', []); }

    /**
     * focus_container_custom_up: ???
     * default: ???
     */
    public function focusContainerCustomUp(array|IResolvable $containers): static { return $this->prop('focus_container_custom_up', $containers); }

    public function addFocusContainerCustomUp(FocusContainer $container): static { return $this->focusContainerCustomUp(array_merge($this->getFocusContainerCustomUp(), [$container])); }

    public function getFocusContainerCustomUp(): array|IResolvable { return $this->getProp('focus_container_custom_up', []); }

}