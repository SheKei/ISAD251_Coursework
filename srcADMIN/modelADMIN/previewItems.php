<?php
/**
 * Created by PhpStorm.
 * User: sheke
 * Date: 31/12/2019
 * Time: 13:25
 */

class previewItems
{
    private $id;
    private $name;
    private $category;
    private $imgPath;
    private $itemStatus;

    public function __Construct($id, $name,$category, $imgPath, $itemStatus)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->imgPath = $imgPath;
        $this->itemStatus = $itemStatus;
    }

    //SETTERS AND GETTERS FOR ALL ATTRIBUTES

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getImgPath()
    {
        return $this->imgPath;
    }

    public function getItemStatus()
    {
        return $this->itemStatus;
    }


    //SETTERS

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }


    public function setImgPath($img)
    {
        $this->imgPath = $img;
    }

    public function setItemStatus($status)
    {
        $this->itemStatus = $status;
    }

}