<?php

namespace vezdehod\packs\ui\jsonui;

use pocketmine\plugin\Plugin;
use vezdehod\packs\ui\jsonui\vanilla\form\CustomFormStyle;
use vezdehod\packs\ui\jsonui\vanilla\form\SimpleFormStyle;
use vezdehod\packs\ui\jsonui\variable\Variable;
use vezdehod\packs\utils\PrettyStringFactory;
use function str_pad;
use const STR_PAD_LEFT;

class PluginJsonUIs {

    /** @var IUINamespace[] */
    private array $UIs = [];
    private array $rawGlobals = [];

    private int $formStyleIDx = 0;

    public function __construct(private Plugin $plugin) {

    }

    public function setGlobalVariable(string $variable, mixed $value): Variable {
        $this->rawGlobals["$" . $variable] = $value;
        return new Variable($variable);
    }


    public function getRawGlobals(): array { return $this->rawGlobals; }


    public function createSimpleFromStyle(): SimpleFormStyle {
        return $this->UIs[] = new SimpleFormStyle($this->plugin, $this->nextFormTrigger());
    }

    public function createCustomFormStyle(): CustomFormStyle {
        return $this->UIs[] = new CustomFormStyle($this->plugin, $this->nextFormTrigger());
    }

    public function newUIKit(string $name): IUINamespace {
        $pluginName = PrettyStringFactory::fromPlugin($this->plugin);
        $uiName = PrettyStringFactory::fromString($name);

        return $this->UIs[] = new BaseUINamespace("{$pluginName}_kit_$uiName", "ui/$pluginName/$uiName.json");
    }

    public function getUIs(): array {
        return $this->UIs;
    }

    /**
     * @internal This will be removed when all UIs have decorators, as in forms
     */
    public function overrideVanilla(string $vanillaFile, string $namespace): IUINamespace {
        return $this->UIs[] = new BaseUINamespace($vanillaFile, $namespace, true);
    }

    private function nextFormTrigger(): string {
        return str_pad((string)($this->formStyleIDx++), 3, "0", STR_PAD_LEFT);//999
    }
}