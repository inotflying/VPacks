<?php

namespace vezdehod\packs\pack;

use pocketmine\resourcepacks\ResourcePack;
use pocketmine\resourcepacks\ZippedResourcePack;
use Ramsey\Uuid\Uuid;
use vezdehod\packs\utils\JsonSerializer;
use ZipArchive;
use function md5_file;
use function unlink;

class ResourcePackGenerator implements IPackSupplier {

    private const UUID_PACK_NAMESPACE = '010bcfd7-ab47-47c2-bc5b-82bbbd809906';
    private const UUID_RESOURCE_NAMESPACE = 'ae26160e-ced6-4467-9a91-a52e6172dc0b';

    private ZipArchive $archive;
    private string $checksumSource = '';

    public function __construct(
        private string $path,
        private string $name
    ) {
        @unlink($this->path);
        $this->archive = new ZipArchive();
        $this->archive->open($this->path, ZipArchive::CREATE);
    }

    public function addFile(string $inPack, string $path): void {
        $this->archive->addFile($path, $inPack);
        $this->checksumSource .= md5_file($inPack);
    }

    public function addFromString(string $inPack, string $content): void {
        $this->archive->addFromString($inPack, $content);
        $this->checksumSource .= $content;
    }

    public function generate(): ResourcePack {
        $this->injectManifest();
        $this->archive->close();
        return new ZippedResourcePack($this->path);
    }

    private function injectManifest(): void {
        $this->addFromString("manifest.json", JsonSerializer::serialize([
            'format_version' => 2,
            'header' => [
                'name' => "VPacks for " . $this->name,
                'uuid' => Uuid::uuid3(self::UUID_PACK_NAMESPACE, $this->checksumSource)->toString(),
                'description' => "VPacks auto-generated resources",
                'version' => [1, 0, 0],
                'min_engine_version' => [1, 16, 0],
                'author' => 'github.com/its-vezdehod'
            ],
            'modules' => [
                [
                    'type' => 'resources',
                    'uuid' => Uuid::uuid3(self::UUID_RESOURCE_NAMESPACE, $this->checksumSource)->toString(),
                    'version' => [1, 0, 0]
                ]
            ],
        ]));
    }
}