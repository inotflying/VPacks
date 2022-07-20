<?php

namespace vezdehod\packs\ui\jsonui\vanilla\form;

use pocketmine\form\Form;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat;

class SimpleFormDecorator implements IFormDecorator {

    /**
     * @internal
     * @see ServerFormStyler::addCustomFormStyle()
     */
    public function __construct(private string $trigger) { }

    public function decorate(Form $decorate): Form {
        return new class($decorate, $this->trigger) implements Form {

            public function __construct(private Form $decorate, private string $trigger) { }

            public function handleResponse(Player $player, $data): void {
                $this->decorate->handleResponse($player, $data);
            }

            public function jsonSerialize(): array {
                $formData = $this->decorate->jsonSerialize();
                $formData['title'] = $this->trigger . TextFormat::RESET . $formData['title'];

                return $formData;
            }
        };
    }
}