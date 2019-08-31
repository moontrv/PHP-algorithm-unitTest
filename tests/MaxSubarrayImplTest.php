<?php
declare(strict_types=1);

namespace LeadDeskTasks;

use PHPUnit\Framework\TestCase;
require __DIR__ . "/../src/MaxSubarrayImpl.php";

final class MaxSubarrayImplTest extends TestCase
{
    protected static $classInstance;

    public static function setUpBeforeClass(): void
    {
        self::$classInstance = new MaxSubarrayImpl;
    }

    public function testCorrectMaxSubarray(): void
    {
        $this->assertEquals(
            6,
            self::$classInstance->contiguous([-1,1,5,-6,3])
        );
    }

    public function testCorrectMaxSubarray2(): void
    {
        $this->assertEquals(
            1998,
            self::$classInstance->contiguous([-10,1000,-2,1000,-3])
        );
    }

    public function testCorrectMaxSubarray3(): void
    {
        $this->assertEquals(
            -3,
            self::$classInstance->contiguous([-3])
        );
    }

    public function testCorrectMaxSubarray4(): void
    {
        $this->assertEquals(
            10,
            self::$classInstance->contiguous([10])
        );
    }

    public function testCorrectMaxStringMiddle(): void
    {
        $this->assertEquals(
            1000,
            self::$classInstance->contiguous([-10,1000,'sdfs',-2,1000,-3])
        );
    }

    public function testCorrectMaxStringNumericMiddle(): void
    {
        $this->assertEquals(
            2108,
            self::$classInstance->contiguous([-10,1000,'110',-2,1000,-3])
        );
    }

    public function testCorrectMaxEmptyStringMiddle(): void
    {
        $this->assertEquals(
            1010,
            self::$classInstance->contiguous([10,1000,'',4,1000,3])
        );
    }

    public function testCorrectMaxSumWholeArray(): void
    {
        $this->assertEquals(
            1028,
            self::$classInstance->contiguous([1,11,'10',4,1000,2])
        );
    }

    public function testWrongtMaxSubarray(): void
    {
        $this->assertNotEquals(
            5,
            self::$classInstance->contiguous([-1,1,5,-6,3])
        );
    }

    public function testWrongtMaxSubarray2(): void
    {
        $this->assertNotEquals(
            5,
            self::$classInstance->contiguous([-10,1000,-2,1000,-3])
        );
    }
}