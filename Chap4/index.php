<?php
class Hololive {
    public static $IRyS = 'IRyS';

    public static function getIRyS() {
        return self::$IRyS;
    }
}

echo Hololive::getIRyS() . "<br />";
echo Hololive::$IRyS;