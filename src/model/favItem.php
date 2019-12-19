<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 19/12/2019
 * Time: 23:06
 */

class favItem
{
    private $numOfLikes;
    private $name;
    private $id;

    public function __Construct($numOfLikes, $theName, $theId)
    {
        $this->numOfLikes = $numOfLikes;
        $this->name = $theName;
        $this->id = $theId;
    }

    public function getNumOfLikes()
    {
        return $this->numOfLikes;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

}