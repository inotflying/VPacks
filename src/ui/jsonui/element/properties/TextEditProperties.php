<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\collection\Collection;
use vezdehod\packs\ui\jsonui\element\types\TextType;
use vezdehod\packs\ui\jsonui\IResolvable;

trait TextEditProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#text-edit

    /**
     * text_box_name: Identifier for text box
     * default: ???
     */
    public function textBoxName(string|IResolvable $val): static { return $this->prop('text_box_name', $val); }

    public function getTextBoxName(): string|IResolvable { return $this->getProp('text_box_name', ""); }

    /**
     * text_edit_box_grid_collection_name: Name of the collection the edit_box belongs to
     * default: ???
     */
    public function textEditBoxGridCollectionName(string|Collection|IResolvable $val): static { return $this->prop('text_edit_box_grid_collection_name', $val); }

    public function getTextEditBoxGridCollectionName(): string|Collection|IResolvable { return $this->getProp('text_edit_box_grid_collection_name', ""); }

    /**
     * constrain_to_rect: ???
     * default: ???
     */
    public function constrainToRect(bool|IResolvable $val): static { return $this->prop('constrain_to_rect', $val); }

    public function isConstrainToRect(): bool|IResolvable { return $this->getPropBool('constrain_to_rect', false); }

    /**
     * enabled_newline: Allows multiline text
     * default: ???
     */
    public function enabledNewline(bool|IResolvable $val): static { return $this->prop('enabled_newline', $val); }

    public function isEnabledNewline(): bool|IResolvable { return $this->getPropBool('enabled_newline', false); }

    /**
     * text_type: Type of characters that the user is allowed to type in th text field.
     * default: ???
     */
    public function textType(TextType|IResolvable $val): static { return $this->prop('text_type', $val); }

    public function getTextType(): TextType|IResolvable { return $this->getProp('text_type', TextType::EXTENDED_ASCII()); }

    /**
     * max_length: Maximum number of characters allow in the text field
     * default: ???
     */
    public function maxLength(int|IResolvable $val): static { return $this->prop('max_length', $val); }

    public function getMaxLength(): int|IResolvable { return $this->getProp('max_length', ""); }

    /**
     * text_control: Name of the child control that will be used for displaying the text
     * default: ???
     */
    public function textControl(string|IResolvable $val): static { return $this->prop('text_control', $val); }

    public function getTextControl(): string|IResolvable { return $this->getProp('text_control', ""); }

    /**
     * place_holder_control: Name of the child control that will be used for display the placeholder text
     * default: ???
     */
    public function placeholderControl(string|IResolvable $val): static { return $this->prop('place_holder_control', $val); }

    public function getPlaceholderControl(): string|IResolvable { return $this->getProp('place_holder_control', ""); }

    /**
     * can_be_deselected: ???
     * default: ???
     */
    public function canBeDeselected(bool|IResolvable $val): static { return $this->prop('can_be_deselected', $val); }

    public function isCanBeDeselected(): bool|IResolvable { return $this->getPropBool('can_be_deselected', false); }

    /**
     * always_listening: ???
     * default: ???
     */
    public function alwaysListening(bool|IResolvable $val): static { return $this->prop('always_listening', $val); }

    public function isAlwaysListening(): bool|IResolvable { return $this->getPropBool('always_listening', false); }

    /**
     * virtual_keyboard_buffer_control: ???
     * default: ???
     */
    public function virtualKeyboardBufferControl(string|IResolvable $val): static { return $this->prop('virtual_keyboard_buffer_control', $val); }

    public function getVirtualKeyboardBufferControl(): string|IResolvable { return $this->getProp('virtual_keyboard_buffer_control', ""); }

}