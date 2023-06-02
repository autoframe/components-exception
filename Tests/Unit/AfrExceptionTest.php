<?php

namespace Unit;

use Autoframe\Components\Exception\AfrException;
use Exception;
use Throwable;
use PHPUnit\Framework\TestCase;

class AfrExceptionTest extends TestCase
{
    static function afrExceptionDataProvider(): array
    {
        try {
            throw new AfrException('TestCase');
        } catch (AfrException $oEx) {
            return [
                [($oEx instanceof Exception), true],
                [($oEx instanceof Throwable), true],
                [(strlen((string)$oEx) > 0), true],
                [($oEx->getMessage()), 'TestCase'],
            ];
        }

    }

    /**
     * @test
     * @dataProvider afrExceptionDataProvider
     */
    public function afrException($a, $b): void
    {
        $this->assertSame($a, $b);
    }
}