<?php

namespace vezdehod\packs\resource;

use Exception;
use pocketmine\plugin\Plugin;
use vezdehod\packs\utils\PrettyStringFactory;
use function md5;

class PluginResources {

    private const TEXTURE_MIMES_2_EXT_MAP = [
        'image/jpeg' => 'jpg',
        'image/png' => 'png'
    ];

    private const SOUND_MIMES_2_EXT_MAP = [
        'audio/ogg' => 'ogg'
    ];

    /** @var Resource[] */
    private array $resources = [];

    public function __construct(private Plugin $plugin) { }

    /**
     * @return Resource[]
     */
    public function getAll(): array {
        return $this->resources;
    }

    public function raw(Resource $resource): static {
        $this->resources[] = $resource;
        return $this;
    }

    /**
     * @throws Exception
     */
    public function localTexture(string $file, string $name): string {
        $this->raw($resource = ResourceFetcher::local($file, $this->getInPackName("textures", $name), self::TEXTURE_MIMES_2_EXT_MAP));
        return $resource->getInPackPath();
    }


    /**
     * @throws Exception
     */
    public function downloadTexture(string $url, string $name): string {
        $this->raw($resource = ResourceFetcher::download($url, $this->getInPackName("textures", $name), self::TEXTURE_MIMES_2_EXT_MAP));
        return $resource->getInPackPath();
    }

    private function getInPackName(string $resourceRoot, string $file): string {
        return $resourceRoot . "/" . PrettyStringFactory::fromPlugin($this->plugin) . "/" . md5($file);
    }
}