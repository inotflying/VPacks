<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\element\types\Color;
use vezdehod\packs\ui\jsonui\element\types\FontSize;
use vezdehod\packs\ui\jsonui\element\types\FontType;
use vezdehod\packs\ui\jsonui\element\types\TextAlignment;
use vezdehod\packs\ui\jsonui\IResolvable;

trait TextProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#text

    /**
     * text: Text content
     * default: ???
     */
    public function text(string|IResolvable $text): static { return $this->prop('text', $text); }

    public function getText(): string|IResolvable { return $this->getProp('text', ''); }

    /**
     * color: Text color. Originally RGB value from 0.0 to 1.0. VPacks uses 0-255
     * default: [1.0, 1.0, 1.0]
     */
    public function color(Color|IResolvable $color): static { return $this->prop('color', $color instanceof Color ? $color->withoutAlpha() : $color); }

    public function getColor(): Color|IResolvable { return $this->getProp('color', Color::white()); }

    /**
     * locked_color: Text color when a parent has enabled: false
     * default: ???
     */
    public function lockedColor(Color|IResolvable $color): static { return $this->prop('locked_color', $color instanceof Color ? $color->withoutAlpha() : $color); }

    public function getLockedColor(): Color|IResolvable { return $this->getProp('locked_color', Color::white()); }

    /**
     * shadow: Text shadow
     * default: false
     */
    public function shadow(bool|IResolvable $shadow): static { return $this->prop('shadow', $shadow); }


    public function hasShadow(): bool|IResolvable { return $this->getPropBool('shadow', false); }


    /**
     * hide_hyphen: Hide hyphen caused by word breaking
     * default: false
     */
    public function hideHyphen(bool|IResolvable $hide): static { return $this->prop('hide_hyphen', $hide); }

    public function isHyphenHidden(): bool|IResolvable { return $this->getPropBool('hide_hyphen', false); }

    /**
     * notify_on_ellipses: Array of names of the controls to notify when text gets or loses ellipses
     * default: ???
     * @param string[]|IResolvable $subscribers
     */
    public function notifyOnEllipses(array|IResolvable $subscribers): static { return $this->prop('notify_on_ellipses', $subscribers); }

    /**
     * @return string[]|IResolvable
     */
    public function getNotifyOnEllipses(): array|IResolvable { return $this->getProp('notify_on_ellipses', []); }

    /**
     * enable_profanity_filter: If "bad" words should be censored
     * default: false
     */
    public function enableProfanityFilter(bool|IResolvable $hide): static { return $this->prop('enable_profanity_filter', $hide); }

    public function isProfanityFilterEnabled(): bool|IResolvable { return $this->getPropBool('enable_profanity_filter', false); }

    /**
     * locked_alpha: Alpha/transparency of label when a parent has enabled: false
     * default: ???
     */
    public function lockedAlpha(float|IResolvable $alpha): static { return $this->prop('locked_alpha', $alpha); }

    public function getLockedAlpha(): float|IResolvable { return $this->getProp('locked_alpha', 0); }

    /**
     * font_size: Size of the text.
     * default: normal
     */
    public function fontSize(FontSize|IResolvable $fontSize): static { return $this->prop('font_size', $fontSize); }

    public function getFontSize(): FontSize|IResolvable { return $this->getProp('font_size', FontSize::NORMAL()); }

    /**
     * font_scale_factor: Scale of the text
     * default: 1.0
     */
    public function fontScaleFactor(float|IResolvable $factor): static { return $this->prop('font_scale_factor', $factor); }

    public function getFontScaleFactor(): float|IResolvable { return $this->getProp('font_scale_factor', 1.0); }

    /**
     * localize: If text should be able to be translated
     * default: false
     */
    public function localize(bool|IResolvable $localize): static { return $this->prop('localize', $localize); }

    public function isLocalized(): bool|IResolvable { return $this->getPropBool('localize', false); }

    /**
     * line_padding: Space between lines
     * default: ???
     */
    public function linePadding(int|IResolvable $padding): static { return $this->prop('line_padding', $padding); }

    public function getLinePadding(): int|IResolvable { return $this->getProp('line_padding', 1); }

    /**
     * font_type: Font of the text.
     * default: default
     */
    public function fontType(FontType|IResolvable $font): static { return $this->prop('font_type', $font); }

    public function getFontType(): FontType|IResolvable { return $this->getProp('font_type', FontType::DEFAULT()); }

    /**
     * backup_font_type: Font used if font_type didn't work
     * default: default
     */
    public function backupFontType(FontType|IResolvable $font): static { return $this->prop('backup_font_type', $font); }

    public function getBackupFontType(): FontType|IResolvable { return $this->getProp('backup_font_type', FontType::DEFAULT()); }

    /**
     * text_alignment: Text alignment direction. If it's not defined it will adjust automatically based on anchor_from and anchor_to
     * default: ???
     */
    public function textAlignment(TextAlignment|IResolvable $alignment): static { return $this->prop('text_alignment', $alignment); }

    public function getTextAlignment(): TextAlignment|IResolvable { return $this->getProp('text_alignment', TextAlignment::CENTER()); }
}