<?php

namespace vezdehod\packs;

use pocketmine\plugin\Plugin;
use vezdehod\packs\resource\PluginResources;
use vezdehod\packs\ui\PluginUIs;

class PluginContent {

    public function __construct(
        private Plugin          $plugin,
        private PluginUIs       $uis,
        private PluginResources $resources,
    ) {
    }

    public function getPlugin(): Plugin {
        return $this->plugin;
    }

    public function getUI(): PluginUIs {
        return $this->uis;
    }

    public function getResources(): PluginResources {
        return $this->resources;
    }

    //TODO: Entities, Blocks, Items, Particles, Glyphs
}