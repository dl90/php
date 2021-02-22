<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ArtistNameTest extends TestCase
{
    public function testArtistWithLongestName(): void
    {
      $this->assertEquals(artistWithLongestName([["name" => "long"],["name" => "s"]]), "long");
      $this->assertEquals(artistWithLongestName([["name" => "long"],["name" => "longer"]]), "longer");
    }
}
