<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\element\types\Anchor;
use vezdehod\packs\ui\jsonui\element\types\Offset;
use vezdehod\packs\ui\jsonui\element\types\Size;
use vezdehod\packs\ui\jsonui\IResolvable;

trait LayoutProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#layout

    /**
     * size: Size of the UI element.
     * default: ["default", "default"]
     * @see Size
     */
    public function size(Size|IResolvable $size): static { return $this->prop('size', $size); }

    public function getSize(): Size|IResolvable { return $this->getProp('size', Size::default()); }

    /**
     * max_size: Maximum size of the UI element can have
     * default: ["default", "default"]
     * @see Offset
     */
    public function maxSize(Size|IResolvable $size): static { return $this->prop('max_size', $size); }

    public function getMaxSize(): Size|IResolvable { return $this->getProp('max_size', Size::default()); }

    /**
     * min_size: Maximum size of the UI element can have
     * default: ["default", "default"]
     * @see Offset
     */
    public function minSize(Size|IResolvable $size): static { return $this->prop('min_size', $size); }

    public function getMinSize(): Size|IResolvable { return $this->getProp('min_size', Size::default()); }

    /**
     * offset: Position of the UI element relative to the parent UI element.
     * default: [0, 0]
     * @see Offset
     */
    public function offset(Offset|IResolvable $offset): static { return $this->prop('offset', $offset); }

    public function getOffset(): Offset|IResolvable { return $this->getProp('offset', Offset::zero()); }

    /**
     * anchor_from: Anchor point in the parent element.
     * default: center
     * @see Anchor
     */
    public function anchorFrom(Anchor|IResolvable $anchor): static { return $this->prop('anchor_from', $anchor); }

    public function getAnchorFrom(): Anchor|IResolvable { return $this->getProp('anchor_from', Anchor::CENTER()); }

    /**
     * anchor_to: Anchor point in the element.
     * default: center
     * @see Anchor
     */
    public function anchorTo(Anchor|IResolvable $anchor): static { return $this->prop('anchor_to', $anchor); }

    public function getAnchorTo(): Anchor|IResolvable { return $this->getProp('anchor_to', Anchor::CENTER()); }

    /**
     * helper-method that set both anchor_to and anchor_from to same {@see Anchor}
     */
    public function anchor(Anchor $anchor): static { return $this->anchorFrom($anchor)->anchorTo($anchor); }

    /**
     * inherit_max_sibling_width: Use the maximum width of the sibling element
     * default: false
     */
    public function inheritMaxSiblingWidth(bool|IResolvable $inherit): static { return $this->prop('inherit_max_sibling_width', $inherit); }

    public function isMaxSiblingWidthInherited(): bool|IResolvable { return $this->getPropBool('inherit_max_sibling_width', false); }

    /**
     * inherit_max_sibling_height: Use the maximum height of the sibling element
     * default: false
     */
    public function inheritMaxSiblingHeight(bool|IResolvable $inherit): static { return $this->prop('inherit_max_sibling_height', $inherit); }

    public function isMaxSiblingHeightInherited(): bool|IResolvable { return $this->getPropBool('inherit_max_sibling_height', false); }

    /**
     * use_anchored_offset: ???
     * default: ???
     */
    public function useAnchoredOffset(bool|IResolvable $use): static { return $this->prop('use_anchored_offset', $use); }

    public function isAnchoredOffsetUsed(): bool|IResolvable { return $this->getPropBool('use_anchored_offset', false); }

    /**
     * containted: ???
     * default: ???
     */
    public function contained(bool|IResolvable $contained): static { return $this->prop('containted', $contained); }

    public function isContained(): bool|IResolvable { return $this->getPropBool('containted', false); }

    /**
     * draggable: ???
     * default: false
     */
    public function draggable(bool|IResolvable $draggable): static { return $this->prop('draggable', $draggable); }

    public function isDraggable(): bool|IResolvable { return $this->getPropBool('draggable', false); }

    /**
     * follows_cursor: Follows the cursor
     * default: false
     */
    public function followCursor(bool|IResolvable $followCursor): static { return $this->prop('follow_cursor', $followCursor); }

    public function isFollowCursor(): bool|IResolvable { return $this->getPropBool('follow_cursor', false); }

}