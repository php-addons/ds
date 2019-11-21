<?php
declare(strict_types=1);

namespace PhpAddons\Ds\Traits;

use Ds\Collection;

trait MagicCalls
{
    /**
     * @var Collection
     */
    protected $parent;

    /**
     * Dynamically handle calls into the parent instance.
     *
     * @param string $method
     * @param array $parameters
     *
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        return $this->parent->{$method}(...$parameters);
    }
}
