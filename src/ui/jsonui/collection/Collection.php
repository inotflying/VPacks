<?php

namespace vezdehod\packs\ui\jsonui\collection;

use JsonSerializable;

class Collection implements JsonSerializable {

    public function __construct(private string $name) { }

    public function getName(): string { return $this->name; }

    public function jsonSerialize() { return $this->name; }
}