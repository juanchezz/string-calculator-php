<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    private StringCalculator $stringCalculator;
    protected function setUp(): void
    {
        parent::setUp();
        $this->stringCalculator = new StringCalculator();
    }
    /**
     * @test
     */
    public function empty_string_returns_zero(): void
    {
        $this->assertEquals(0, $this->StringCalculator->add(""));
    }
    /**
     * @test
     */
    public function givenOneNumberReturnsThisNumber(): void
    {
        $this->assertEquals(1, $this->StringCalculator->add("1"));
    }
    /**
     * @test
     */
    public function givenTwoNumbersReturnsSum()
    {
        $this->assertEquals(3, $this->StringCalculator->add("1,2"));
    }
}