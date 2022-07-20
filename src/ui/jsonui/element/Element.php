<?php

namespace vezdehod\packs\ui\jsonui\element;

use Closure;
use JsonSerializable;
use vezdehod\packs\ui\jsonui\element\properties\ControlProperties;
use vezdehod\packs\ui\jsonui\element\properties\LayoutProperties;
use vezdehod\packs\ui\jsonui\expression\condition\Condition;
use vezdehod\packs\ui\jsonui\IElementContainer;
use vezdehod\packs\ui\jsonui\IResolvable;
use vezdehod\packs\ui\jsonui\IUINamespace;
use vezdehod\packs\ui\jsonui\variable\Variable;
use function array_map;
use function array_merge;
use function current;

abstract class Element implements JsonSerializable, IElementContainer {

    protected string $type;
    protected array $properties = [];

    use ControlProperties;
    use LayoutProperties;

    public function __construct(
        protected IUINamespace $namespace,
        protected string       $name,
        protected ?Element     $parent = null
    ) {

    }

    public function getNamespace(): IUINamespace { return $this->namespace; }

    public function getName(): string { return $this->name; }

    public function getId(): string { return "{$this->namespace->getName()}.$this->name"; }

    public function getEmbeddingName(): string { return $this->name; }

    protected function prop(string $prop, mixed $val): static {
        $this->properties[$prop] = $val;
        return $this;
    }

    protected function getProp(string $prop, mixed $default): mixed {
        return $this->properties[$prop] ?? $default;
    }

    protected function getPropBool(string $prop, bool $default): bool|IResolvable {
        $val = $this->getProp($prop, $default);
        return $val instanceof Condition && ($bool = $val->asBoolean()) !== null ? $bool : $val;
    }

    public function setVar(Variable|string $variable, mixed $value): static { return $this->prop(($variable instanceof Variable ? $variable : new Variable($variable))->getName(), $value); }

    public function setVarDefault(Variable|string $variable, mixed $value): static { return $this->prop(($variable instanceof Variable ? $variable : new Variable($variable))->getName() . "|default", $value); }

    /**
     * @param Closure(self): void $closure
     * @return $this
     */
    public function in(Closure $closure): static {
        $closure($this);
        return $this;
    }

    public function jsonSerialize() {
        return array_merge(['type' => $this->type], $this->properties);
    }


    public function getElements(): array {
        //TODO: Rewrite this T_T
        return array_map(static fn($arr) => current($arr), $this->getControls());
    }
}