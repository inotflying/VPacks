<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\element\types\ClipDirection;
use vezdehod\packs\ui\jsonui\element\types\Cube;
use vezdehod\packs\ui\jsonui\element\types\IntVec2;
use vezdehod\packs\ui\jsonui\element\types\Tiled;
use vezdehod\packs\ui\jsonui\IResolvable;

trait SpriteProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#sprite

    // NOTE:
    // To use clipping, bind a #*_ratio binding name to a #clip-ratio property with binding condition "always".
    // Progress arrow and fuel images in furnace UI work like this.

    /**
     * texture: Image path starting from pack root. (e.g. "textures/ui/White")
     * default: ???
     */
    public function texture(string|IResolvable $texture): static { return $this->prop('texture', $texture); }

    public function getTexture(): string|IResolvable { return $this->getProp('texture', ''); }

    /**
     * allow_debug_missing_texture: Display the missing_texture if the texture is not found
     * default: true
     */
    public function allowDebugMissingTexture(bool|IResolvable $texture): static { return $this->prop('allow_debug_missing_texture', $texture); }

    public function isDebugMissingTextureAllowed(): bool|IResolvable { return $this->getPropBool('allow_debug_missing_texture', true); }

    /**
     * uv: Start position of the texture mapping
     * default: ???
     */
    public function uv(IntVec2|IResolvable $uv): static { return $this->prop('uv', $uv); }

    public function getUV(): IntVec2|IResolvable { return $this->getProp('uv', IntVec2::zero()); }

    /**
     * uv_size: Size of the texture mapping
     * default: ???
     */
    public function uvSize(IntVec2|IResolvable $uvSize): static { return $this->prop('uv_size', $uvSize); }

    public function getUVSize(): IntVec2|IResolvable { return $this->getProp('uv_size', IntVec2::zero()); }

    /**
     * texture_file_system: ???
     * default: ???
     */
    public function textureFileSystem(string|IResolvable $texture): static { return $this->prop('texture_file_system', $texture); }

    public function getTextureFileSystem(): string|IResolvable { return $this->getProp('texture_file_system', ''); }

    /**
     * nineslice_size: 9-slice. A method that divides an texture into 9 pieces. When resized the corners will stay in place and the rest will stretch
     * default: ???
     */
    public function nineSliceSize(int|IntVec2|Cube|IResolvable $nineslice): static { return $this->prop('nineslice_size', $nineslice); }

    public function getNineSliceSize(): int|IntVec2|Cube|IResolvable { return $this->getProp('nineslice_size', 0); }

    /**
     * tiled: If the texture will tile when the size of the UI element is bigger than the texture size.
     * default: ???
     */
    public function tiled(Tiled|IResolvable $scale): static { return $this->prop('tiled', $scale); }

    public function getTiled(): Tiled|IResolvable { return $this->getProp('tiled', Tiled::FALSE()); }

    /**
     * tiled_scale: Scale of the tile textures
     * default: false
     */
    public function tiledScale(false|IntVec2|IResolvable $scale): static { return $this->prop('tiled_scale', $scale); }

    public function getTiledScale(): false|IntVec2|IResolvable { return $this->getProp('tiled_scale', false); }

    /**
     * clip_direction: Start point position for the clip_ratio. If down, the image will begin to appear from the bottom.
     * default: ???
     */
    public function clipDirection(ClipDirection|IResolvable $direction): static { return $this->prop('clip_direction', $direction); }

    public function getClipDirection(): ClipDirection|IResolvable { return $this->getProp('clip_direction', ClipDirection::CENTER()); }

    /**
     * clip_ratio: How much to clip. From 0.0 to 1.0
     * default: ???
     */
    public function clipRatio(float|IResolvable $keepRatio): static { return $this->prop('clip_ratio', $keepRatio); }

    public function getClipRatio(): float|IResolvable { return $this->getProp('clip_ratio', 0.0); }

    /**
     * clip_pixelperfect: If the clip should try to be the most pixel accurate possible
     * default: ???
     */
    public function clipPixelPerfect(bool|IResolvable $clip): static { return $this->prop('clip_pixelperfect', $clip); }

    public function isClippedPixelPerfect(): bool|IResolvable { return $this->getPropBool('clip_pixelperfect', false); }

    /**
     * keep_ratio: Keep ratio when resizing image
     * default: false
     */
    public function keepRatio(bool|IResolvable $keepRatio): static { return $this->prop('keep_ratio', $keepRatio); }

    public function isKeepRatio(): bool|IResolvable { return $this->getPropBool('keep_ratio', false); }

    /**
     * bilinear: Use the bilinear function when resizing the image
     * default: false
     */
    public function bilinear(bool|IResolvable $bilinear): static { return $this->prop('bilinear', $bilinear); }

    public function isBilinear(): bool|IResolvable { return $this->getPropBool('bilinear', false); }

    /**
     * fill: Scratch the image to the size
     * default: false
     */
    public function fill(bool|IResolvable $fill): static { return $this->prop('fill', $fill); }

    public function isFilled(): bool|IResolvable { return $this->getPropBool('fill', false); }

    /**
     * $fit_to_width: ???
     * default: ???
     */
    public function fitToWidth(bool|IResolvable $fit): static { return $this->prop('$fit_to_width', $fit); }

    public function isFittedToWidth(): bool|IResolvable { return $this->getPropBool('$fit_to_width', false); }

    /**
     * zip_folder: ???
     * default: ???
     */
    public function zipFolder(string|IResolvable $folder): static { return $this->prop('zip_folder', $folder); }

    public function getZipFolder(): string|IResolvable { return $this->getProp('zip_folder', ''); }

    /**
     * grayscale: Render image in black and white
     * default: false
     */
    public function grayscale(bool|IResolvable $grayscale): static { return $this->prop('grayscale', $grayscale); }

    public function isGrayscale(): bool|IResolvable { return $this->getPropBool('grayscale', false); }

    /**
     * force_texture_reload: Reload image when the texture path is changed
     * default: ???
     */
    public function forceTextureReload(bool|IResolvable $reload): static { return $this->prop('force_texture_reload', $reload); }

    public function isForceTextureReload(): bool|IResolvable { return $this->getPropBool('force_texture_reload', false); }

    /**
     * base_size: ???
     * default: ???
     */
    public function baseSize(IntVec2|IResolvable $baseSize): static { return $this->prop('base_size', $baseSize); }

    public function getBaseSize(): IntVec2|IResolvable { return $this->getProp('base_size', IntVec2::zero()); }
}