<?php

namespace vezdehod\packs\ui\jsonui;

interface IUINamespace extends IElementContainer {

    public function getName(): string;

    public function getInPackPath(): string;

    /**
     * @return string namespace.elementName
     */
    public function elementId(string $elemName): string;

    public function isVanilla(): bool;
}