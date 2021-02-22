<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class VowelsTest extends TestCase
{
    public function testNumberOfVowels(): void
    {
      $this->assertEquals(numberOfVowels("orange"), 3);
      $this->assertEquals(numberOfVowels("lighthouse labs"), 5);
      $this->assertEquals(numberOfVowels("aeiou"), 5);
    }
}
