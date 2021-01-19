<?php 
include_once('../Abstract/bai13OOPChien.php');
include_once('../Interface/iEnity.php');
class Product extends BaseRow implements iEnity{
    private $categoryId;

    // Hàm khởi tạo
    public function __construct($name , $id , $categoryId)
    {
        $this->setData($id,$name);
        $this->categoryId = $categoryId;
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