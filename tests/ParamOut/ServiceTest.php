<?php

namespace LeoVie\TryPsalm\ParamOut\Test;

use LeoVie\TryPsalm\ParamOut\Service;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    /** @var Service */
    private Service $service;

    protected function setUp(): void
    {
        $this->service = new Service();
    }

    /**
     * @dataProvider appendToStringProvider
     */
    public function testAppendToString(?string $string, string $appendix, string $expected): void
    {
        $this->service->appendToString($string, $appendix);

        self::assertSame($expected, $string);
    }

    public function appendToStringProvider(): \Generator
    {
        yield ['string' => null, 'appendix' => 'blabla', 'expected' => 'blabla'];
        yield ['string' => 'foo', 'appendix' => 'blabla', 'expected' => 'fooblabla'];
    }

    /**
     * @dataProvider appendToStringNullableProvider
     */
    public function testAppendToStringNullable(?string $string, string $appendix, ?string $expected): void
    {
        $this->service->appendToStringNullable($string, $appendix);

        self::assertSame($expected, $string);
    }

    public function appendToStringNullableProvider(): \Generator
    {
        yield ['string' => null, 'appendix' => 'blabla', 'expected' => null];
        yield ['string' => 'foo', 'appendix' => 'blabla', 'expected' => 'fooblabla'];
    }
}