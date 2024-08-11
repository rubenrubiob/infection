<?php

namespace Force_Error\Test;

use Force_Error\SourceClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class SourceClassTest extends TestCase
{
    public function test_fail(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        SourceClass::create(-1);
    }

    #[DataProvider('sourceClassProvider')]
    public function test_hello(int $expected, SourceClass $sourceClass)
    {
        self::assertSame($expected, $sourceClass->value());
    }

    public static function sourceClassProvider(): iterable
    {
        yield 'Example' => [0, SourceClass::create(0)];
    }
}
