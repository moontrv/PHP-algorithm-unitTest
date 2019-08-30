<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require __DIR__ . "/../src/AnagramImpl.php";

final class AnagramImplTest extends TestCase
{
    protected static $classInstance;

    public static function setUpBeforeClass(): void
    {
        self::$classInstance = new AnagramImpl;
    }

    public function testTwoAreAnagram(): void
    {
        $this->assertEquals(
            true,
            self::$classInstance->isAnagram('RAT', 'TAR')
        );
    }

    public function testTwoAreAnagram2(): void
    {
        $this->assertEquals(
            true,
            self::$classInstance->isAnagram('ANAGRAM', 'NAGARAM')
        );
    }

    public function testTwoAreNotAnagram(): void
    {
        $this->assertEquals(
            false,
            self::$classInstance->isAnagram('RAT', 'TAR1')
        );
    }

    public function testTwoAreNotAnagram2(): void
    {
        $this->assertEquals(
            false,
            self::$classInstance->isAnagram('RAT12', 'TAR1')
        );
    }
}
