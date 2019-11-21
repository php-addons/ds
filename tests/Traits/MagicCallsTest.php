<?php
declare(strict_types=1);

namespace PhpAddons\Ds\Tests\Traits;

use Ds\Collection;
use PhpAddons\Ds\Tests\Helper;
use PhpAddons\Ds\Traits\MagicCalls;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionException;

class MagicCallsTest extends TestCase
{
    use Helper;

    /**
     * @throws ReflectionException
     */
    public function testCall(): void
    {
        $expected = 5;

        /** @var MockObject|MagicCalls $trait */
        $trait = $this->getMockForTrait(MagicCalls::class);

        /** @var MockObject|Collection $collection */
        $collection = $this->createMock(Collection::class);
        $collection->expects($this->once())
            ->method('count')
            ->willReturn($expected);

        $this->setProtectedProperty($trait, 'parent', $collection);

        $this->assertEquals($expected, $trait->count());
    }
}
