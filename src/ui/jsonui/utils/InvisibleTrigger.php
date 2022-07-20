<?php

namespace vezdehod\packs\ui\jsonui\utils;

use pocketmine\utils\TextFormat;
use function array_map;
use function implode;
use function preg_replace;
use function str_replace;
use function str_split;

class InvisibleTrigger {

    /**
     * @return string string => §s§t§r§i§n§g
     */
    public static function createTrigger(string $source): string {
        return implode(array_map(
            static fn($char) => TextFormat::ESCAPE . $char,
            str_split(preg_replace("#[^a-zA-Z\d]#", "", $source))
        ));
    }

    public static function getTriggerName(string $trigger): string {
        return str_replace("§", "", $trigger);
    }
}