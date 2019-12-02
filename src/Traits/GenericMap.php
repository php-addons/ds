<?php

declare(strict_types=1);

namespace PhpAddons\Ds\Traits;

use Ds\Map;

trait GenericMap
{
    /**
     * @var Map
     */
    protected $parent;

    /**
     * Create new instance
     *
     * @param iterable|null $values
     */
    public function __construct(?iterable $values = null)
    {
        $this->parent = new Map();

        if (func_num_args()) {
            $this->putAll($values);
        }
    }

    /**
     * @param iterable $values
     */
    public function putAll(iterable $values): void
    {
        foreach ($values as $key => $value) {
            $this->put($key, $value);
        }
    }
}
