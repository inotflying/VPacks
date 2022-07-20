<?php

namespace vezdehod\packs\ui;

use pocketmine\plugin\Plugin;
use vezdehod\packs\IPackManager;
use vezdehod\packs\pack\IPackSupplier;
use vezdehod\packs\ui\jsonui\vanilla\form\CustomFormStyle;
use vezdehod\packs\ui\jsonui\vanilla\form\IFormStyle;
use vezdehod\packs\ui\jsonui\vanilla\form\ServerFormStyler;
use vezdehod\packs\ui\jsonui\vanilla\form\SimpleFormStyle;
use vezdehod\packs\utils\JsonSerializer;
use function array_merge;

class UIManager implements IPackManager {

    private ServerFormStyler $styledServerForm;

    public function __construct() {
        $this->styledServerForm = new ServerFormStyler();
    }

    public function inject(IPackSupplier $supplier, array $contents): void {
        $autoload = [];
        $globals = [];
        $changed = [];

        $changed[] = $this->styledServerForm;

        foreach ($contents as $content) {
            foreach ($content->getUI()->getJsonUIs()->getUIs() as $ui) {
                if (!$ui->isVanilla()) {
                    $autoload[] = $ui->getInPackPath();
                }
                if ($ui instanceof IFormStyle) {
                    //TODO: rewrite?
                    if ($ui instanceof SimpleFormStyle) {
                        $this->styledServerForm->addSimpleFormStyle($ui);
                    } else if ($ui instanceof CustomFormStyle) {
                        $this->styledServerForm->addCustomFormStyle($ui);
                    }
                }
                $changed[] = $ui;
            }

            foreach ($content->getUI()->getJsonUIs()->getRawGlobals() as $k => $v) {
                $globals[$k] = $v;
            }
        }


        foreach ($changed as $ui) {
            if (count($elements = $ui->getElements()) === 0) {
                continue;
            }
            $supplier->addFromString($ui->getInPackPath(), JsonSerializer::serialize(array_merge(['namespace' => $ui->getName()], $elements)));
        }

        if (count($autoload) > 0) {
            $supplier->addFromString("ui/_ui_defs.json", JsonSerializer::serialize(["ui_defs" => $autoload]));
        }
        
        if (count($globals) > 0) {
            $supplier->addFromString("ui/_global_variables.json", JsonSerializer::serialize($globals));
        }
    }

    public function fromPlugin(Plugin $plugin): PluginUIs {
        return new PluginUIs($plugin);
    }
}