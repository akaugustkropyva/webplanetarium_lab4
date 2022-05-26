<?php

class ShoppingCart
{
    private $order;

    public function __construct($list){

        foreach ($list as $poster) {
            if (!$poster instanceof ActorPoster && !$poster instanceof SpecialDayPoster){
                throw new InvalidArgumentException();
            }
        }
        $this->order=$list;
    }

    public function add($poster) {

        if (!$poster instanceof ActorPoster && !$poster instanceof SpecialDayPoster){
            throw new InvalidArgumentException();
        }
        $this->order[] = $poster;
    }

    public function get_price() {

        $price = 0;

        if (!empty($this->order)){
            foreach ($this->order as $item){
                $price += $item->getPrice();
            }
            return $price;
        }
        return $price;
    }

    public function __toString()
    {
        return implode('', $this->order);
    }
}