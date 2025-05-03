<?php

namespace App\Helper;

use DateTime;

class Helper {

    public function __construct(private DateTime $dateTime,private string $timezone) {

    }

    public function getDate(){
        dump($this->dateTime->format('Y m d'));
    }

    public function isActive(){
        dump('Helper');
        return true;
        
    }

}

?>