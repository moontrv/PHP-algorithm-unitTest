<?php
declare(strict_types=1);

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