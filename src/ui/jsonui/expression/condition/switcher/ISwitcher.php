<?php

namespace vezdehod\packs\ui\jsonui\expression\condition\switcher;

use vezdehod\packs\ui\jsonui\element\Element;

/**
 * Conditional-renderer
 */
interface ISwitcher {

    public function ifContains(string $trigger, string $elemId): static;

    public function orElse(string $elemId): static;

    public function createSwitcher(string $switcherName): Element;
}