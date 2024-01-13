<?php

use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '/../src/Movie.php');

class MovieTest extends TestCase
{
    public function testConstructor()
    {
        $movie = new Movie("Finding Nemo", Childrens::class);
        $this->assertEquals("Finding Nemo", $movie->getTitle());
        $this->assertEquals(Childrens::class, $movie->getClassification());
    }

    public function testSetClassification()
    {
        $movie = new Movie("Inception", NewRelease::class);
        $movie->setClassification(Horror::class);

        $this->assertEquals(Horror::class, $movie->getClassification());
    }
}
