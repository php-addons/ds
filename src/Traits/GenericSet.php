<?php

declare(strict_types=1);

namespace PhpAddons\Ds\Traits;

use Ds\Collection;
use Ds\Set;

/** @method void allocate(int $capacity) */
/** @method int capacity() */
/** @method void clear() */
/** @method Collection copy() */
/** @method int count() */
trait GenericSet
{
    /**
     * @var Set
     */
    protected $parent;

    /**
     * Creates a new set using the values of an iterable.
     * The keys of either will not be preserved.
     *
     * @param iterable|null $values
     */
    public function __construct(?iterable $values = null)
    {
        $this->parent = new Set();

        if (func_num_args()) {
            $this->add(...$values);
        }
    }

    /**
     * @return Set
     */
    public function getParent(): Set
    {
        return $this->parent;
    }

    /**
     * @param Set $parent
     */
    protected function setParent(Set $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @param Set $parent
     *
     * @return $this
     */
    protected function createFromParent(Set $parent): self
    {
        $instance = new self();
        $instance->setParent($parent);

        return $instance;
    }
}
