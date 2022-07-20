<?php

namespace vezdehod\packs\utils;

use function array_filter;
use function json_encode;
use const JSON_PRETTY_PRINT;
use const JSON_UNESCAPED_SLASHES;
use const JSON_UNESCAPED_UNICODE;

class JsonSerializer {

    public static bool $production = false;

    public static function serialize(mixed $jsonable): string {
        $flags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
        if (!self::$production) {
            $flags |= JSON_PRETTY_PRINT;
        }

        return json_encode($jsonable, $flags);
    }

    /**
     * @deprecated It's going to be removed when I'll integrate schemas
     */
    public static function nonNullableOf(object $obj): object {
        return self::asObject(array_filter((array)$obj, static fn($v) => $v !== null));
    }

    public static function asObject(array $object): object { return (object)$object; }
}