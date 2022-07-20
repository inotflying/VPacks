<?php

namespace vezdehod\packs\ui\jsonui;

use vezdehod\packs\ui\jsonui\element\Element;
use vezdehod\packs\ui\jsonui\element\ElementFactory;

class BaseUINamespace implements IUINamespace {

    use ElementFactory;

    protected array $elements = [];

    public function __construct(private string $name, private string $inPackPath, private bool $isVanilla = false) { }

    public function getName(): string { return $this->name; }

    public function getElements(): array { return $this->elements; }

    public function addElement(Element $elem): static {
        $this->elements[$elem->getEmbeddingName()] = $elem;
        return $this;
    }

    public function getInPackPath(): string { return $this->inPackPath; }

    public function elementId(string $elemName): string { return "$this->name.$elemName"; }

    public function isVanilla(): bool { return $this->isVanilla; }
}