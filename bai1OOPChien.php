<?php 
include('bai13OOPChien.php');
class Product extends BaseRow {
    private $id ;
    private $name ;
    private $categoryId;

    // Hàm khởi tạo
    public function __construct($id , $name , $categoryId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->categoryId = $categoryId;
    }

    // Hàm get id
    public function getID()
    {
        return $this->id;
    }

    // hàm get name
    public function getName()
    {
        return $this->name;
    }

    // hàm get categoryID
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    // hàm set id
    public function setID($id)
    {
        $this->id = $id;
    }

    // hàm set name
    public function setName($name)
    {
        $this->name = $name;
    }

    // hàm set category id
    public function setCategoryId($categoryId)
    {
        $this->id = $categoryId;
    }

}



?>