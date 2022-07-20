<?php

namespace vezdehod\packs;

use Closure;
use LogicException;
use pocketmine\plugin\Plugin;

class ContentFactory {


    /** @var null|Closure(Plugin): PluginContent */
    private static ?Closure $factory;
    /** @var PluginContent[] */
    private static ?array $contents = [];


    /**
     * @param Closure(Plugin): PluginContent $factory
     */
    public static function setFactory(Closure $factory): void { self::$factory = $factory; }

    public static function create(Plugin $owner): PluginContent {
        if (self::$contents === null || self::$factory === null) {
            throw new LogicException("You can use ContentFactory::create a only between VPacks loading and enabling!");
        }
        return self::$contents[$owner->getName()] ?? self::$contents[$owner->getName()] = (self::$factory)($owner);
    }

    /**
     * @return PluginContent[]
     */
    public static function getAndLock(): array {
        try {
            return self::$contents;
        } finally {
            self::$contents = null;
            self::$factory = null;
        }
    }
}