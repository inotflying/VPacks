<?php

namespace vezdehod\packs\utils;

use pocketmine\plugin\Plugin;
use function preg_replace;
use function strtolower;

class PrettyStringFactory {

    public static function fromPlugin(Plugin $plugin): string {
        return self::fromString($plugin->getName());
    }

    public static function fromString(string $input): string {
        return strtolower(preg_replace("/[^a-z_\d]/i", "_", $input));
    }
}