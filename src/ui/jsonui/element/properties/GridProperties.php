<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\binding\Binding;
use vezdehod\packs\ui\jsonui\element\types\IntVec2;
use vezdehod\packs\ui\jsonui\element\types\Orientation;
use vezdehod\packs\ui\jsonui\IResolvable;

trait GridProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#grid

    /**
     * grid_dimensions: Number of columns and rows the grid has
     * default: ???
     */
    public function gridDimensions(IntVec2|IResolvable $dimensions): static { return $this->prop('grid_dimensions', $dimensions); }

    public function getGridDimensions(): IntVec2|IResolvable { return $this->getProp('grid_dimensions', IntVec2::zero()); }

    /**
     * maximum_grid_items: Maximum number of items the grid will generate
     * default: ???
     */
    public function maximumGridItems(int|IResolvable $items): static { return $this->prop('maximum_grid_items', $items); }

    public function getMaximumGridItems(): int|IResolvable { return $this->getProp('maximum_grid_items', 0); }

    /**
     * grid_dimension_binding: Binding name for grid dimensions
     * default: ???
     */
    public function gridDimensionBinding(string|IResolvable $binding): static { return $this->prop('grid_dimension_binding', $binding); }

    public function getGridDimensionBinding(): string|IResolvable { return $this->getProp('grid_dimension_binding', new Binding("#DEV_NULL")); }

    /**
     * grid_rescaling_type: Grid rescaling orientation.
     * default: ???
     */
    public function gridRescalingType(Orientation|IResolvable $orientation): static { return $this->prop('grid_rescaling_type', $orientation); }

    public function getGridRescalingType(): Orientation|IResolvable { return $this->getProp('grid_rescaling_type', Orientation::NONE()); }

    /**
     * grid_fill_direction: ???
     * default: ???
     */
    public function gridFillDirection(Orientation|IResolvable $orientation): static { return $this->prop('grid_fill_direction', $orientation); }

    public function getGridFillDirection(): Orientation|IResolvable { return $this->getProp('grid_fill_direction', Orientation::NONE()); }

    /**
     * grid_item_template: An element capable of handling collections (e.g. "common.container_item", "container_items", "inventory_items" and etc.)
     * default: ???
     */
    public function gridItemTemplate(string|IResolvable $template): static { return $this->prop('grid_item_template', $template); }

    public function getGridItemTemplate(): string|IResolvable { return $this->getProp('grid_item_template', Orientation::NONE()); }

    /**
     * precached_grid_item_count: ???
     * default: ???
     */
    public function precachedGridItemCount(int|IResolvable $count): static { return $this->prop('precached_grid_item_count', $count); }

    public function getPrecachedGridItemCount(): int|IResolvable { return $this->getProp('precached_grid_item_count', 0); }

}