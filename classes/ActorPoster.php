<?php

class ActorPoster extends Poster
{
    private $actor;

    public function __construct($name, $price, $actor)
    {
        parent::__construct($name, $price);
        $this->actor = $actor;
    }

    /**
     * @return mixed
     */
    public function getActor()
    {
        return $this->actor;
    }
}