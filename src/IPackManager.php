<?php

namespace vezdehod\packs;

use vezdehod\packs\pack\IPackSupplier;

interface IPackManager {

    /**
     * @param PluginContent[] $contents
     */
    public function inject(IPackSupplier $supplier, array $contents): void;
}