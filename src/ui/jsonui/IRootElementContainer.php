<?php

namespace vezdehod\packs\ui\jsonui;

use vezdehod\packs\ui\jsonui\element\Element;

interface IRootElementContainer {

    public function getRootName(): string;

    public function setRootElement(Element $elem): static;
}