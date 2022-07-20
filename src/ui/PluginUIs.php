<?php

namespace vezdehod\packs\ui;

use pocketmine\plugin\Plugin;
use vezdehod\packs\ui\jsonui\PluginJsonUIs;

class PluginUIs {
    private PluginJsonUIs $jsonUIs;
    //TODO: Preparing to ore-ui with high-level abstractions

    public function __construct(
        private Plugin $plugin
    ) {
        $this->jsonUIs = new PluginJsonUIs($this->plugin);
    }

    public function getJsonUIs(): PluginJsonUIs {
        return $this->jsonUIs;
    }
}