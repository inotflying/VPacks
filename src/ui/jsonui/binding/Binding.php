<?php

namespace vezdehod\packs\ui\jsonui\binding;

use vezdehod\packs\ui\jsonui\IResolvable;

class Binding implements IResolvable {


    public static function visible(): Binding { return new self("visible"); }
    public static function enabled(): Binding { return new self("enabled"); }

    public const BINDING_PREFIX = "#";

    public function __construct(private string $name) { }

    public function withoutPrefix(): string { return $this->name; }

    public function getName(): string { return self::BINDING_PREFIX . $this->name; }

    public function jsonSerialize(): string { return $this->getName(); }

    public function __toString(): string { return $this->getName(); }
}