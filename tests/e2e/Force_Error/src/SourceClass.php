<?php

declare(strict_types=1);

namespace Force_Error;

class SourceClass
{
    private function __construct(
        private readonly int $foo,
    ) {}

    public static function create(int $foo): self
    {
        if ($foo < 0) {
            throw new \InvalidArgumentException('Error');
        }

        return new self($foo);
    }

    public function value(): int
    {
        return $this->foo;
    }
}
