<?php

class SpecialDayPoster extends Poster
{
    private $day;

    public function __construct($name, $price, $day)
    {
        parent::__construct($name, $price);
        $this->day = $day;
    }

    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param mixed $day
     */
    public function setDay($day)
    {
        $this->day = $day;
    }

}