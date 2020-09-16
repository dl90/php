<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ArtistGenreTest extends TestCase
{
    public function testArtistGenre(): void
    {
      $artists1 = [
        ["name" => "name", "genre" => "genre"],
        ["name" => "name2", "genre" => "genre"]
      ];
      $results1 = [
        "genre" => ["name", "name2"]
      ];
      $artists2 = [
        ["name" => "name", "genre" => "genre"],
        ["name" => "name2", "genre" => "genre2"]
      ];
      $results2 = [
        "genre" => ["name"],
        "genre2" => ["name2"]
      ];
      
      $this->assertEquals(organizeArtists($artists1), $results1);
      $this->assertEquals(organizeArtists($artists2), $results2);
    }
}
