<?php

namespace vezdehod\packs\ui\jsonui\binding;

use JsonSerializable;
use vezdehod\packs\ui\jsonui\collection\Collection;
use vezdehod\packs\ui\jsonui\expression\condition\Condition;
use vezdehod\packs\ui\jsonui\IResolvable;
use vezdehod\packs\utils\JsonSerializer;

/**
 * TODO: Refactor to be more user-friendly
 */
class DataBinding implements JsonSerializable {
    // https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#data-binding-array-object

    public static function named(IResolvable $source): DataBinding {
        $binding = new self();
        $binding->binding_name = $source;
        return $binding;
    }

    public static function rebind(IResolvable $source, IResolvable $target): DataBinding {
        $binding = new self();
        $binding->source_property_name = $source;
        $binding->target_property_name = $target;
        return $binding;
    }

    public static function viewRebind(IResolvable $source, IResolvable $target): DataBinding {
        $binding = self::rebind($source, $target);
        $binding->binding_type = BindingType::VIEW();
        return $binding;
    }

    public static function visibleIf(Condition $condition): DataBinding {
        return self::viewRebind($condition, Binding::visible());
    }

    public static function enabledIf(Condition $condition): DataBinding {
        return self::viewRebind($condition, Binding::enabled());
    }

    public static function override(Binding $source, Binding $override): DataBinding {
        $binding = self::named($source);
        $binding->binding_name_override = $override;
        return $binding;
    }

    public static function overrideFromCollection(Collection $collection, Binding $source, Binding $override): DataBinding {
        $binding = self::override($source, $override);
        $binding->binding_type = BindingType::COLLECTION();
        $binding->binding_collection_name = $collection;
        return $binding;
    }

    public static function collectionDetails(Collection $collection): DataBinding {
        $binding = new self();
        $binding->binding_type = BindingType::COLLECTION_DETAILS();
        $binding->binding_collection_name = $collection;

        return $binding;
    }

    public bool|IResolvable|null $ignored = null; // If binding should be ignored
    public BindingType|IResolvable|null $binding_type = null; // ???
    public string|IResolvable|null $binding_name = null; // Stores the value of the data binding name or condition with it
    public string|IResolvable|null $binding_name_override = null; // Name of the UI element property that will apply the stored value in binding_name
    public string|IResolvable|Collection|null $binding_collection_name = null; // Name of the collection of items to be used
    public string|IResolvable|null $binding_collection_prefix = null; // ???
    public string|IResolvable|null $binding_condition = null; // Condition for the data binding to happen.
    public string|IResolvable|null $source_control_name = null; // Name of the UI element to observe its property values
    public string|IResolvable|null $source_property_name = null; // Store the value of the property value of the UI element refered in source_control_name
    public string|IResolvable|null $target_property_name = null; // The UI element property that the stored value in source_property_name will be applied to
    public bool|IResolvable|null $resolve_sibling_scope = null; // ???


    public function jsonSerialize() {
        return JsonSerializer::nonNullableOf($this);
    }
}