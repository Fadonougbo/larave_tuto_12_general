<?php

namespace App\Helper;

use DateTime;

class Helper {

    public int $id=0;

    public function __construct(private DateTime $dateTime,private string $timezone) {

    }

    public function getID(){
        $this->id++;

        return $this->id;
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