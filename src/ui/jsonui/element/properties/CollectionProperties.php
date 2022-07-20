<?php

namespace vezdehod\packs\ui\jsonui\element\properties;

use vezdehod\packs\ui\jsonui\collection\Collection;
use vezdehod\packs\ui\jsonui\IResolvable;

trait CollectionProperties {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#collection

    /**
     * collection_name: Name of the collection to be used
     * default: ???
     */
    public function collectionName(string|Collection|IResolvable $name): static { return $this->prop('collection_name', $name); }

    public function getCollectionName(): string|Collection|IResolvable { return $this->getProp('collection_name', ""); }

    /**
     * factory: ???
     * default: ???
     */
    public function factory(string $name, string $elemId): static { return $this->prop('factory', ['name' => $name, 'control_name' => $elemId]); }

    public function getFactory(): ?array { return $this->getProp('factory', null);}
}