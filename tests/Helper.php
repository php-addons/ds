<?php

declare(strict_types=1);

namespace PhpAddons\Ds\Tests;

use ReflectionClass;
use ReflectionException;

trait Helper
{
    /**
     * @param string $class
     * @param string $propertyName
     * @param mixed $value
     *
     * @throws ReflectionException
     */
    public function setStaticProperty(string $class, string $propertyName, $value): void
    {
        $reflection = new ReflectionClass($class);
        $property = $reflection->getProperty($propertyName);
        $property->setAccessible(true);
        $property->setValue(null, $value);
    }

    /**
     * @param object $object
     * @param string $propertyName
     * @param mixed $value
     *
     * @throws ReflectionException
     */
    private function setProtectedProperty(object $object, string $propertyName, $value): void
    {
        $reflection = new ReflectionClass($object);
        $property = $reflection->getProperty($propertyName);
        $property->setAccessible(true);
        $property->setValue($object, $value);
    }
}
