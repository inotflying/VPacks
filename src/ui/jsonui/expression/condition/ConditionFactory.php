<?php

namespace vezdehod\packs\ui\jsonui\expression\condition;

use ArgumentCountError;
use vezdehod\packs\ui\jsonui\IResolvable;
use function array_shift;
use function is_bool;

class ConditionFactory {
    // TODO: I think this class can be refactored to high-level API with Variables, Bindings and so not, not just string factory
    //      Something like Variable->contains(input); Binding->contains(input);

    public static function true(): Condition { return new Condition("true"); }

    public static function false(): Condition { return new Condition("false"); }

    public static function ofBoolean(bool|IResolvable $value): Condition {
        if (is_bool($value)) {
            return $value ? self::true() : self::false();
        }
        return new Condition($value->getName());
    }

    public static function equals(IResolvable $source, string $input): Condition {
        return new Condition("{$source->getName()} = '$input'");
    }

    public static function notContains(IResolvable $source, string $input): Condition {
        return new Condition("({$source->getName()} - '$input') = {$source->getName()}");
    }

    public static function contains(IResolvable $source, string $input): Condition { return self::notContains($source, $input)->not(); }

    public static function and(Condition ...$conditions): Condition {
        $condition = array_shift($conditions);
        if ($condition === null) {
            throw new ArgumentCountError("Excepted at least one condition");
        }
        return $condition->and(...$conditions);
    }

    public static function or(Condition ...$conditions): Condition {
        $condition = array_shift($conditions);
        if ($condition === null) {
            throw new ArgumentCountError("Excepted at least one condition");
        }
        return $condition->or(...$conditions);
    }

}