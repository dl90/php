<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class CamelCaseTest extends TestCase
{
    public function testCamelCaseString(): void
    {
      $this->assertEquals(camelCase("this is a string"), "thisIsAString");
      $this->assertEquals(camelCase("loopy lighthouse"), "loopyLighthouse");
      $this->assertEquals(camelCase("supercalifragalisticexpialidocious"), "supercalifragalisticexpialidocious");
    }
}









