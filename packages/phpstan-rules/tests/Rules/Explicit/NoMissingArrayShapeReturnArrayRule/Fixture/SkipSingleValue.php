<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\Explicit\NoMissingArrayShapeReturnArrayRule\Fixture;

final class SkipSingleValue
{
    public function run(string $name)
    {
        return [$name];
    }
}