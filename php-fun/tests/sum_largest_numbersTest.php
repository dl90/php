<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class SumLargestTest extends TestCase
{
    public function testSumsLargestNumbers(): void
    {
      $this->assertEquals(sumLargestNumbers([1, 10]), 11);
      $this->assertEquals(sumLargestNumbers([1, 2, 3]), 5);
      $this->assertEquals(sumLargestNumbers([10, 4, 34, 6, 92, 2]), 126);
    }
}
