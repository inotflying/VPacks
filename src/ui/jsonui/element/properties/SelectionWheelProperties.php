<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\IResolvable;
use function array_merge;

trait SelectionWheelProperties {

    /**
     * inner_radius: ???
     * default: ???
     */
    public function innerRadius(int|IResolvable $radius): static { return $this->prop('inner_radius', $radius); }

    public function getInnerRadius(): int|IResolvable { return $this->getProp('inner_radius', 0); }

    /**
     * outer_radius: ???
     * default: ???
     */
    public function outerRadius(int|IResolvable $radius): static { return $this->prop('outer_radius', $radius); }

    public function getOuterRadius(): int|IResolvable { return $this->getProp('outer_radius', 0); }

    /**
     * state_controls: ???
     * default: ???
     */
    public function stateControls(array|IResolvable $controls): static { return $this->prop('state_controls', $controls); }

    public function stateControl(string $control): static { return $this->stateControls(array_merge($this->getStateControls(), [$control])); }

    public function getStateControls(): array|IResolvable { return $this->getProp('state_controls', []); }

    /**
     * slice_count: ???
     * default: ???
     */
    public function sliceCount(int|IResolvable $count): static { return $this->prop('slice_count', $count); }

    public function getSliceCount(): int|IResolvable { return $this->getProp('slice_count', 0); }

    /**
     * button_name: ???
     * default: ???
     */
    public function buttonName(string|IResolvable $name): static { return $this->prop('button_name', $name); }

    public function getButtonName(): string|IResolvable { return $this->getProp('button_name', ''); }

    /**
     * iterate_left_button_name: ???
     * default: ???
     */
    public function iterateLeftButtonName(string|IResolvable $name): static { return $this->prop('iterate_left_button_name', $name); }

    public function getIterateLeftButtonName(): string|IResolvable { return $this->getProp('iterate_left_button_name', ''); }

    /**
     * iterate_right_button_name: ???
     * default: ???
     */
    public function iterateRightButtonName(string|IResolvable $name): static { return $this->prop('iterate_right_button_name', $name); }

    public function getIterateRightButtonName(): string|IResolvable { return $this->getProp('iterate_right_button_name', ''); }

    /**
     * initial_button_slice: ???
     * default: ???
     */
    public function initialButtonSlice(int|IResolvable $slice): static { return $this->prop('initial_button_slice', $slice); }

    public function getInitialButtonSlice(): int|IResolvable { return $this->getProp('initial_button_slice', 0); }
}