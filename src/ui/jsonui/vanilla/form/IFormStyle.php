<?php

namespace vezdehod\packs\ui\jsonui\vanilla\form;

use vezdehod\packs\ui\jsonui\IRootElementContainer;
use vezdehod\packs\ui\jsonui\IUINamespace;

interface IFormStyle extends IUINamespace, IRootElementContainer {

    public function getTrigger(): string;

    public function getDecorator(): IFormDecorator;
}