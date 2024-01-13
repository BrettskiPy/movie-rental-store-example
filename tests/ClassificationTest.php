<?php

use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '/../src/Classification.php');

class ClassificationTest extends TestCase
{
    // Tests for NewRelease
    public function testNewReleaseRentalCharge()
    {
        $this->assertEquals(0, NewRelease::calculateRentalCharge(0));
        $this->assertEquals(3, NewRelease::calculateRentalCharge(1));
    }

    public function testNewReleaseFrequentRenterPoints()
    {
        $this->assertEquals(1, NewRelease::calculateFrequentRenterPoints(0));
        $this->assertEquals(1, NewRelease::calculateFrequentRenterPoints(1));
        $this->assertEquals(2, NewRelease::calculateFrequentRenterPoints(2));

    }

    // Tests for Childrens
    public function testChildrensRentalCharge()
    {
        $this->assertEquals(1.5, Childrens::calculateRentalCharge(0));
        $this->assertEquals(1.5, Childrens::calculateRentalCharge(3)); 
        $this->assertEquals(3, Childrens::calculateRentalCharge(4)); 
    }

    public function testChildrensFrequentRenterPoints()
    {
        $this->assertEquals(1, Childrens::calculateFrequentRenterPoints(0)); 
        $this->assertEquals(1, Childrens::calculateFrequentRenterPoints(1)); 
    }

    // Tests for Regular
    public function testRegularRentalCharge()
    {
        $this->assertEquals(2, Regular::calculateRentalCharge(0));  
        $this->assertEquals(2, Regular::calculateRentalCharge(2));    
        $this->assertEquals(3.5, Regular::calculateRentalCharge(3));   
    }

    public function testRegularFrequentRenterPoints()
    {
        $this->assertEquals(1, Regular::calculateFrequentRenterPoints(0)); 
        $this->assertEquals(1, Regular::calculateFrequentRenterPoints(1)); 
    }

    // Tests for Horror
    public function testHorrorRentalCharge()
    {
        $this->assertEquals(2, Horror::calculateRentalCharge(0)); 
        $this->assertEquals(2, Horror::calculateRentalCharge(4)); 
        $this->assertEquals(12, Horror::calculateRentalCharge(5));
    }

    public function testHorrorFrequentRenterPoints()
    {
        $this->assertEquals(0, Horror::calculateFrequentRenterPoints(0));
        $this->assertEquals(1, Horror::calculateFrequentRenterPoints(2));
    }
}
