<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\IResolvable;

trait DropdownProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#dropdown

    /**
     * dropdown_name: Identifier for the dropdown
     * default: ???
     */
    public function dropdownName(string|IResolvable $val): static { return $this->prop('dropdown_name', $val); }

    public function getDropdownName(): string|IResolvable { return $this->getProp('dropdown_name', ""); }

    /**
     * dropdown_content_control: Name of the child control that will behave as the root content panel
     * default: ???
     */
    public function dropdownContentControl(string|IResolvable $val): static { return $this->prop('dropdown_content_control', $val); }

    public function getDropdownContentControl(): string|IResolvable { return $this->getProp('dropdown_content_control', ""); }

    /**
     * dropdown_area: Name of the child control that will behave as the inside content
     * default: ???
     */
    public function dropdownArea(string|IResolvable $val): static { return $this->prop('dropdown_area', $val); }

    public function getDropdownArea(): string|IResolvable { return $this->getProp('dropdown_area', ""); }

}