<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use pocketmine\utils\EnumTrait;

/**
 * @method static TextType EXTENDED_ASCII()
 * @method static TextType IDENTIFIER_CHARS()
 * @method static TextType NUMBER_CHARS()
 */
class TextType implements JsonSerializable {

    use EnumTrait { __construct as private _delegated__construct; }
    
    protected static function setup(): void {
        self::register(new self("ExtendedASCII"));
        self::register(new self("IdentifierChars"));
        self::register(new self("NumberChars"));
    }

    public function __construct(private string $type) {
        $this->_delegated__construct(strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $type)));
    }

    public function jsonSerialize() { return $this->type; }
}