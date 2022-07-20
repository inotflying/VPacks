<?php

namespace vezdehod\packs\resource;

use Exception;
use pocketmine\utils\Internet;
use pocketmine\utils\InternetException;
use vezdehod\packs\resource\exception\FileNotFoundException;
use vezdehod\packs\resource\exception\InvalidMimeTypeException;
use function array_keys;
use function explode;
use function file_exists;
use function file_put_contents;
use function implode;
use function md5;
use function mime_content_type;
use function stripos;
use function strtolower;
use function sys_get_temp_dir;

class ResourceFetcher {

    /**
     * @param string $inPackBasename Path to in pack file without extension
     * @throws Exception
     */
    public static function local(string $path, string $inPackBasename, array $mimes): Resource {
        if (!file_exists($path)) {
            throw new FileNotFoundException();
        }
        if (!isset($mimes[mime_content_type($path)])) {
            throw new InvalidMimeTypeException();
        }


        return new Resource($inPackBasename . "." . $mimes[mime_content_type($path)], $path);
    }


    /**
     * @param string $inPackBasename Path to in pack file without extension
     * @throws Exception
     */
    public static function download(string $url, string $inPackBasename, array $mimes): Resource {
        //TODO: Custom HTTP client?

        $result = Internet::getURL($url);
        if ($result === null) {
            throw new InternetException("Failed to fetch resource " . $url);
        }
        $mime = 'unknown';
        foreach ($result->getHeaders() as $headers) {
            foreach ($headers as $header => $value) {
                if (stripos($header, "content-type") === 0) {
                    [$mime] = explode(";", $value);
                    break;
                }
            }
        }

        if (!isset($mimes[$mime = strtolower($mime)])) {
            throw new InvalidMimeTypeException("Excepted " . implode("|", array_keys($mimes)) . ", got $mime");
        }
        $path = sys_get_temp_dir() . "/" . md5($result->getBody()) . "." . $mimes[$mime];
        file_put_contents($path, $result->getBody());

        return new Resource($inPackBasename . "." . $mimes[$mime], $path);
    }
}