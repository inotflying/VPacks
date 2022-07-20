<?php

namespace vezdehod\packs\pack;

interface IPackSupplier {

    public function addFile(string $inPack, string $path): void;

    public function addFromString(string $inPack, string $content): void;
}