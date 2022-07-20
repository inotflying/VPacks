<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\binding\DataBinding;
use vezdehod\packs\ui\jsonui\IResolvable;
use function array_merge;

trait DataBindingProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#data-binding

    /**
     * bindings: Bind and work with hardcoded values in the element
     * default: ???
     * @see DataBinding
     * @param DataBinding[]|IResolvable $bindings
     */
    public function bindings(array|IResolvable $bindings): static { return $this->prop('bindings', $bindings); }

    public function binding(DataBinding $binding): static { return $this->bindings(array_merge($this->getBindings(), [$binding])); }

    /**
     * @return DataBinding[]|IResolvable
     */
    public function getBindings(): array|IResolvable { return $this->getProp('bindings', []); }

}