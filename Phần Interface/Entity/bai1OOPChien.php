<?php 
include_once('../Interface/iEnity.php');
class Product implements iEnity {
    private $id;
    private $name;
    private $categoryId;

    // Hàm khởi tạo
    public function __construct($name , $id , $categoryId)
    {
        $this->setData($id,$name);
        $this->categoryId = $categoryId;
    }
    public function setData($id , $name)
    {
        $this->id = $id ;
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id)
    {   
        $this->id = $id;
    }
    public function setName($name){
        $this->name = $name;
    }
    // hàm get categoryID
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    
    // hàm set category id
    public function setCategoryId($categoryId)
    {
        $this->id = $categoryId;
    }

}



?>