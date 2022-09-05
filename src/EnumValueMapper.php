<?php
declare(strict_types=1);

namespace Demo;

class EnumValueMapper
{

    /**
     * @return array<string,MyEnum::*>
     */
    public function getMap(): array
    {
        return self::$map;
    }

    /** @phpstan-var array<string,MyEnum::*> */
    private static $map = [
        'foo3' => MyEnum::VALUE_1,
        'foo2' => MyEnum::VALUE_2,
        'foo1' => MyEnum::VALUE_3,
    ];
}