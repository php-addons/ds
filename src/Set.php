<?php

declare(strict_types=1);

namespace PhpAddons\Ds;

use PhpAddons\Ds\Traits\MagicCalls;
use PhpAddons\Ds\Traits\GenericSet;

class Set
{
    use MagicCalls;
    use GenericSet;

    /**
     * @param mixed $values
     */
    public function add(...$values): void
    {
        $this->parent->add($values);
    }

    /**
     * @param int|int[] ...$values
     *
     * @return bool
     */
    public function contains(int ...$values): bool
    {
        return $this->parent->contains($values);
    }
}
