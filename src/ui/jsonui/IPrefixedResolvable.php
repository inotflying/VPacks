<?php

namespace vezdehod\packs\ui\jsonui;

interface IPrefixedResolvable extends IResolvable {

    public function getWithoutPrefix(): string;

    public function getPrefix(): string;
}