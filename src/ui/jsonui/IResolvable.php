<?php

namespace vezdehod\packs\ui\jsonui;

use JsonSerializable;
use Stringable;

interface IResolvable extends JsonSerializable, Stringable {

    public function getName(): string;
}