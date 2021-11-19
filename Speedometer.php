<?php

class Speedometer {

    public const TOMILES_CONVERSION = 0.621;

    public static function convertKmToMiles (int $Km)
    {   
        return $Km * SELF::TOMILES_CONVERSION;
    }
}