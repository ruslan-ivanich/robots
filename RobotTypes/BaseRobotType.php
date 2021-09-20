<?php

class BaseRobotType
{
    /**
     * @var int
     */
    public $weight;
    /**
     * @var int
     */
    public $height;
    /**
     * @var int
     */
    public $speed;

    public function __construct()
    {
        $this->weight = rand(1, 10);
        $this->height = rand(1, 10);
        $this->speed = rand(1, 10);
    }


}