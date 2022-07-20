<?php

namespace vezdehod\packs\utils;

use pocketmine\utils\EnumTrait;

trait JsonEnumTrait {

    use EnumTrait;

    public function jsonSerialize(): string { return $this->name(); }

    /**
     * TODO: remove this when schemas arrive
     */
    public static function fromString(string $raw): object { return self::_registryFromString($raw); }
}