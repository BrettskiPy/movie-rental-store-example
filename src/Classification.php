<?php

interface Classification
{
    public static function calculateRentalCharge(int $daysRented): float;
    public static function calculateFrequentRenterPoints(int $daysRented): int;
}

class NewRelease implements Classification
{
    public static function calculateRentalCharge(int $daysRented): float
    {
        return $daysRented * 3;
    }

    public static function calculateFrequentRenterPoints(int $daysRented): int
    {
        return ($daysRented > 1) ? 2 : 1;
    }
}

class Childrens implements Classification
{
    public static function calculateRentalCharge(int $daysRented): float
    {
        $charge = 1.5;
        if ($daysRented > 3) {
            $charge += ($daysRented - 3) * 1.5;
        }
        return $charge;
    }

    public static function calculateFrequentRenterPoints(int $daysRented): int
    {
        return 1;
    }
}

class Regular implements Classification
{
    public static function calculateRentalCharge(int $daysRented): float
    {
        $charge = 2;
        if ($daysRented > 2) {
            $charge += ($daysRented - 2) * 1.5;
        }
        return $charge;
    }

    public static function calculateFrequentRenterPoints(int $daysRented): int
    {
        return 1;
    }
}

class Horror implements Classification
{
    public static function calculateRentalCharge(int $daysRented): float
    {
        $charge = 2;
        if ($daysRented > 4) {
            $charge += $daysRented * 2;
        }
        return $charge;
    }

    public static function calculateFrequentRenterPoints(int $daysRented): int
    {
        return round(0.5 * $daysRented);
    }
}
