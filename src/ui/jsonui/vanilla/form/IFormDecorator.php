<?php

namespace vezdehod\packs\ui\jsonui\vanilla\form;

use pocketmine\form\Form;

interface IFormDecorator {

    public function decorate(Form $decorate): Form;
}