<?php

declare(strict_types=1);

namespace PhpAddons\Ds;

use PhpAddons\Ds\Traits\MagicCalls;
use PhpAddons\Ds\Traits\GenericSet;

class IntSet
{
    use MagicCalls;
    use GenericSet;

    /**
     * @param int|int[] $values
     */
    public function add(int ...$values): void
    {
        $this->parent->add($values);
    }

    /**
     * @param int|int[] $values
     *
     * @return bool
     */
    public function contains(int ...$values): bool
    {
        return $this->parent->contains($values);
    }

    /**
     * @param IntSet $set
     *
     * @return $this
     */
    public function diff(IntSet $set): self
    {
        $parent = $this->parent->diff($set->getParent());

        return $this->createFromParent($parent);
    }
}
