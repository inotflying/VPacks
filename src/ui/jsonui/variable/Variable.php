<?php

namespace vezdehod\packs\ui\jsonui\variable;

use vezdehod\packs\ui\jsonui\IPrefixedResolvable;

class Variable implements IPrefixedResolvable {

    public const VARIABLE_PREFIX = "$";

    public function __construct(private string $name) { }

    public function getWithoutPrefix(): string { return $this->name; }

    public function getPrefix(): string { return self::VARIABLE_PREFIX; }

    public function getName(): string { return self::VARIABLE_PREFIX . $this->name; }

    public function jsonSerialize(): string { return $this->getName(); }

    public function __toString(): string { return $this->getName(); }
}