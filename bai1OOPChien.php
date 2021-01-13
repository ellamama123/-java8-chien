<?php 
class Product {
    private $id , $name , $categoryId;
    public function __construct($id , $name , $categoryId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->categoryId = $categoryId;
    }
    public function getID()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setID($id)
    {
        $this->id = $id;
    }
}



?>