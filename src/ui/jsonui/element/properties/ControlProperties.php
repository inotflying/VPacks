<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\anims\Animation;
use vezdehod\packs\ui\jsonui\element\Element;
use vezdehod\packs\ui\jsonui\element\ElementFactory;
use vezdehod\packs\ui\jsonui\element\types\IntVec2;
use vezdehod\packs\ui\jsonui\element\types\Offset;
use vezdehod\packs\ui\jsonui\expression\condition\VariableCondition;
use vezdehod\packs\ui\jsonui\IResolvable;
use vezdehod\packs\ui\jsonui\modification\Modification;
use function array_merge;

trait ControlProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#control

    use ElementFactory;

    /**
     * visible: If the UI element should be visible
     * default: true
     */
    public function visible(bool|IResolvable $visible): static { return $this->prop('visible', $visible); }

    public function isVisible(): bool|IResolvable { return $this->getPropBool('visible', true); }

    /**
     * enabled: If true and if the UI element or any of its children have the locked state then they will be in the locked
     * default: true
     */
    public function enabled(bool|IResolvable $enabled): static { return $this->prop('enabled', $enabled); }

    public function isEnabled(): bool|IResolvable { return $this->getPropBool('enabled', true); }


    /**
     * layer: Z-Index/Layer (like zindex in CSS) relative to parent element. Higher layers will render above
     * default: 0
     */
    public function layer(int|IResolvable $layer): static { return $this->prop('layer', $layer); }

    public function getLayer(): int|IResolvable { return $this->getProp('layer', 0); }

    /**
     * alpha: Alpha/transparency of the element. It will only affect the UI element. Its children will be unaffected.
     *        If you want the alpha to apply for both the parent and children also use propagate_alpha
     * default: 1.0
     */
    public function alpha(float|IResolvable $alpha): static { return $this->prop('alpha', $alpha); }

    public function getAlpha(): float|IResolvable { return $this->getProp('alpha', 1.0); }

    /**
     * propagate_alpha: If alpha should not only apply to the parent if possible but also all its children
     * default: false
     */
    public function propagateAlpha(bool|IResolvable $propagateAlpha): static { return $this->prop('propagate_alpha', $propagateAlpha); }

    public function isPropagateAlpha(): bool|IResolvable { return $this->getPropBool('propagate_alpha', false); }

    /**
     * clips_children: Cuts off visually and interactively everything beyond the bounderies of the UI element
     * default: false
     */
    public function clipsChildren(bool|IResolvable $clipsChildren): static { return $this->prop('clips_children', $clipsChildren); }

    public function isClipsChildren(): bool|IResolvable { return $this->getPropBool('clips_children', false); }

    /**
     * allow_clipping: If clips_children works in the UI element. Otherwise, it won't have any effect
     * default: true
     */
    public function allowClipping(bool|IResolvable $clipsChildren): static { return $this->prop('allow_clipping', $clipsChildren); }

    public function isAllowClipping(): bool|IResolvable { return $this->getProp('allow_clipping', true); }

    /**
     * clip_offset: Offset from the start of the clipping
     * default: [0, 0]
     */
    public function clipOffset(Offset|IResolvable $offset): static { return $this->prop("clip_offset", $offset); }

    public function getClipOffset(): Offset|IResolvable { return $this->getProp('clips_offset', Offset::zero()); }

    /**
     * clip_state_change_event: ???
     * default: ???
     */
    public function clipStateChangeEvent(string|IResolvable $offset): static { return $this->prop('clip_state_change_event', $offset); }

    public function getClipStateChangeEvent(): string|IResolvable { return $this->getProp('clip_state_change_event', ""); }

    /**
     * enabled_scissor_test: https://www.khronos.org/opengl/wiki/Scissor_Test
     * default: ???
     */
    public function enableScissorTest(bool|IResolvable $enable): static { return $this->prop('enable_scissor_test', $enable); }

    public function isScissorTestEnabled(): bool|IResolvable { return $this->getPropBool('enable_scissor_test', false); }

    /**
     * property_bag: Property bag contains properties/variables that are more related with the data than the actually structure and look of the UI element
     * default: ???
     * @param array<string, mixed>|IResolvable $properties
     * @see PropertyBag
     */
    public function propertyBag(array|IResolvable $properties): static { return $this->prop('property_bag', $properties); }

    public function propertyInBag(string $key, mixed $value): static { return $this->propertyBag(array_merge($this->getPropertyBag(), [$key => $value])); }

    public function getPropertyBag(): array|IResolvable { return $this->getProp('property_bag', []); }

    /**
     * selected: If the text box is selected by default
     * default: ???
     */
    public function selected(bool|IResolvable $enable): static { return $this->prop('selected', $enable); }

    public function isSelected(): bool|IResolvable { return $this->getPropBool('selected', false); }

    /**
     * use_child_anchors: Use the anchor_from andanchor_to of the child of the UI element
     * default: false
     */
    public function useChildAnchors(bool|IResolvable $enable): static { return $this->prop('use_child_anchors', $enable); }

    public function isChildAnchorsUsed(): bool|IResolvable { return $this->getPropBool('use_child_anchors', false); }

    /**
     * For adding children to the element
     * default: ???
     * @param array<string, Element>|IResolvable $controls
     */
    public function controls(array|IResolvable $controls): static { return $this->prop('controls', $controls); }

    public function control(string $control, Element $element): static { return $this->controls(array_merge($this->getControls(), [[$control => $element]])); }

    public function addElement(Element $elem): static { return $this->control($elem->getEmbeddingName(), $elem); }

    /**
     * @return array<string, Element>[]|IResolvable
     */
    public function getControls(): array|IResolvable { return $this->getProp('controls', []); }

    /**
     * anims: Array of the animation names
     * default: ???
     * @param Animation[]|string[]|IResolvable $anims
     */
    public function anims(array|IResolvable $anims): static { return $this->prop('anims', $anims); }

    public function anim(string|Animation|IResolvable $animation): static { return $this->anims(array_merge($this->getAnims(), [$animation])); }

    /**
     * @return Animation[]|string[]|IResolvable
     */
    public function getAnims(): array|IResolvable { return $this->getProp('anims', []); }

    /**
     * disable_anim_fast_forward: ???
     * default: false
     */
    public function disableAnimFastForward(bool|IResolvable $disable): static { return $this->prop('disable_anim_fast_forward', $disable); }

    public function isAnimFastForwardDisabled(): bool|IResolvable { return $this->getPropBool('disable_anim_fast_forward', false); }

    /**
     * animation_reset_name: ???
     * default: false
     */
    public function animationResetName(string|IResolvable $name): static { return $this->prop('animation_reset_name', $name); }

    public function getAnimationResetName(): string|IResolvable { return $this->getProp('animation_reset_name', ""); }

    /**
     * ignored: If the UI element should be ignored
     * default: false
     */
    public function ignored(bool|IResolvable $value): static { return $this->prop('ignored', $value); }

    public function isIgnored(): bool|IResolvable { return $this->getProp('ignored', false); }

    /**
     * variables: A bunch of conditions that change the variables values
     * default: ???
     * @param VariableCondition[] $conditions
     */
    public function variablesIf(array|IResolvable $conditions): static { return $this->prop('variables', $conditions); }

    public function setVariableIf(VariableCondition $condition): static { return $this->variablesIf(array_merge($this->getConditionalVariables(), [$condition])); }

    /**
     * @return VariableCondition[]|IResolvable
     */
    public function getConditionalVariables(): array|IResolvable { return $this->getProp('variables', []); }

    /**
     * modifications: Allows to modify the UI files of resource packs below (vanilla being the most bottom one)
     * default: ???
     * @param Modification[] $modifications
     */
    public function modifications(array|IResolvable $modifications): static { return $this->prop('modifications', $modifications); }

    public function modification(Modification $modification): static { return $this->modifications(array_merge($this->getModifications(), [$modification])); }

    /**
     * @return Modification[]|IResolvable
     */
    public function getModifications(): array|IResolvable { return $this->getProp('modifications', []); }

    /**
     * grid_position: Position that the control will take inside the grid. This also allows to modify specific grid items of a hardcoded grid
     * default: ???
     */
    public function gridPosition(IntVec2|IResolvable $vec2): static { return $this->prop('grid_position', $vec2); }

    public function getGridPosition(): IntVec2|IResolvable { return $this->getProp('grid_position', IntVec2::zero()); }

    /**
     * collection_index: Index that the control takes in the collection
     * default: ???
     */
    public function collectionIndex(int|IResolvable $idx): static { return $this->prop('collection_index', $idx); }

    public function getCollectionIndex(): int|IResolvable { return $this->getProp('collection_index', 0); }

}