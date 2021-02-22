<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class SumConditionalTest extends TestCase
{
    public function testSumConditionalNumbers(): void
    {

      $this->assertEquals(conditionalSum([1, 2, 3, 4, 5], "even"), 6);
      $this->assertEquals(conditionalSum([1, 2, 3, 4, 5], "odd"), 9);
      $this->assertEquals(conditionalSum([13, 88, 12, 44, 99], "even"), 144);
      $this->assertEquals(conditionalSum([], "odd"), 0);
    }
}
