<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\IResolvable;
use function array_merge;

trait FactoryProperties {
    // ???

    /**
     * @param array<string, string>|IResolvable $controls
     */
    public function controlIds(array|IResolvable $controls): static { return $this->prop('control_ids', $controls); }

    public function controlId(string $control, string $id): static { return $this->controlIds(array_merge($this->getControlIds(), [$control => $id])); }

    /**
     * @return array<string, string>|IResolvable
     */
    public function getControlIds(): array|IResolvable { return $this->getProp('control_ids', []); }
}