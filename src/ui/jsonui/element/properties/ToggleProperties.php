<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\collection\Collection;
use vezdehod\packs\ui\jsonui\IResolvable;

trait ToggleProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#toggle

    /**
     * radio_toggle_group: ???
     * default: ???
     */
    public function radioToggleGroup(bool|IResolvable $val): static { return $this->prop('radio_toggle_group', $val); }

    public function isRadioToggleGroup(): bool|IResolvable { return $this->getPropBool('radio_toggle_group', false); }

    /**
     * toggle_name: Identifier for the toggle group it belongs to. It can be a custom one.
     * default: ???
     */
    public function toggleName(string|IResolvable $val): static { return $this->prop('toggle_name', $val); }

    public function getToggleName(): string|IResolvable { return $this->getProp('toggle_name', ""); }

    /**
     * toggle_default_state: ???
     * default: ???
     */
    public function toggleDefaultState(bool|IResolvable $val): static { return $this->prop('toggle_default_state', $val); }

    public function isToggleDefaultState(): bool|IResolvable { return $this->getPropBool('toggle_default_state', false); }

    /**
     * toggle_group_forced_index: Index of the toggle in its group
     * default: ???
     */
    public function toggleGroupForcedIndex(int|IResolvable $val): static { return $this->prop('toggle_group_forced_index', $val); }

    public function getToggleGroupForcedIndex(): int|IResolvable { return $this->getProp('toggle_group_forced_index', 0); }

    /**
     * toggle_group_default_selected: Index of the default toggle of the its group
     * default: ???
     */
    public function toggleGroupDefaultSelected(int|IResolvable $val): static { return $this->prop('toggle_group_default_selected', $val); }

    public function getToggleGroupDefaultSelected(): int|IResolvable { return $this->getProp('toggle_group_default_selected', 0); }

    /**
     * reset_on_focus_lost: ???
     * default: ???
     */
    public function resetOnFocusLost(bool|IResolvable $val): static { return $this->prop('reset_on_focus_lost', $val); }

    public function isResetOnFocusLost(): bool|IResolvable { return $this->getPropBool('reset_on_focus_lost', false); }

    /**
     * toggle_on_hover: ???
     * default: ???
     */
    public function toggleOnHover(string|IResolvable $val): static { return $this->prop('toggle_on_hover', $val); }

    public function getToggleOnHover(): string|IResolvable { return $this->getProp('toggle_on_hover', ""); }

    /**
     * toggle_on_button: ???
     * default: ???
     */
    public function toggleOnButton(string|IResolvable $val): static { return $this->prop('toggle_on_button', $val); }

    public function getToggleOnButton(): string|IResolvable { return $this->getProp('toggle_on_button', ""); }

    /**
     * toggle_on_hover: ???
     * default: ???
     */
    public function toggleOffButton(string|IResolvable $val): static { return $this->prop('toggle_on_hover', $val); }

    public function getToggleOffButton(): string|IResolvable { return $this->getProp('toggle_off_button', ""); }

    /**
     * enable_directional_toggling: ???
     * default: ???
     */
    public function enableDirectionalToggling(bool|IResolvable $val): static { return $this->prop('enable_directional_toggling', $val); }

    public function isEnableDirectionalToggling(): bool|IResolvable { return $this->getPropBool('enable_directional_toggling', false); }

    /**
     * toggle_grid_collection_name: Name of the collection the toggle belongs to
     * default: ???
     */
    public function toggleGridCollectionName(string|Collection|IResolvable $val): static { return $this->prop('toggle_grid_collection_name', $val); }

    public function getToggleGridCollectionName(): string|Collection|IResolvable { return $this->getProp('toggle_grid_collection_name', ""); }

    /**
     * checked_control: Name of the child control that will be displayed only in the checked state
     * default: ???
     */
    public function checkedControl(string|IResolvable $val): static { return $this->prop('checked_control', $val); }

    public function getCheckedControl(): string|IResolvable { return $this->getProp('checked_control', ""); }

    /**
     * unchecked_control: Name of the child control that will be displayed only in the unchecked state
     * default: ???
     */
    public function uncheckedControl(string|IResolvable $val): static { return $this->prop('unchecked_control', $val); }

    public function getUncheckedControl(): string|IResolvable { return $this->getProp('unchecked_control', ""); }

    /**
     * checked_hover_control: Name of the child control that will be displayed only in the checked hover state
     * default: ???
     */
    public function checkedHoverControl(string|IResolvable $val): static { return $this->prop('checked_hover_control', $val); }

    public function getCheckedHoverControl(): string|IResolvable { return $this->getProp('checked_hover_control', ""); }

    /**
     * unchecked_hover_control: Name of the child control that will be displayed only in the unchecked hover state
     * default: ???
     */
    public function uncheckedHoverControl(string|IResolvable $val): static { return $this->prop('unchecked_hover_control', $val); }

    public function getUncheckedHoverControl(): string|IResolvable { return $this->getProp('unchecked_hover_control', ""); }

    /**
     * checked_locked_control: Name of the child control that will be displayed only in the checked locked state
     * default: ???
     */
    public function checkedLockedControl(string|IResolvable $val): static { return $this->prop('checked_locked_control', $val); }

    public function getCheckedLockedControl(): string|IResolvable { return $this->getProp('checked_locked_control', ""); }


    /**
     * unchecked_locked_control: Name of the child control that will be displayed only in the unchecked locked state
     * default: ???
     */
    public function uncheckedLockedControl(string|IResolvable $val): static { return $this->prop('unchecked_locked_control', $val); }

    public function getUncheckedLockedControl(): string|IResolvable { return $this->getProp('unchecked_locked_control', ""); }


    /**
     * checked_locked_hover_control: Name of the child control that will be displayed only in the checked locked hover state
     * default: ???
     */
    public function checkedLockedHoverControl(string|IResolvable $val): static { return $this->prop('checked_locked_hover_control', $val); }

    public function getCheckedLockedHoverControl(): string|IResolvable { return $this->getProp('checked_locked_hover_control', ""); }

    /**
     * unchecked_locked_hover_control: Name of the child control that will be displayed only in the unchecked locked hover state
     * default: ???
     */
    public function uncheckedLockedHoverControl(string|IResolvable $val): static { return $this->prop('unchecked_locked_hover_control', $val); }

    public function getUncheckedLockedHoverControl(): string|IResolvable { return $this->getProp('unchecked_locked_hover_control', ""); }

}