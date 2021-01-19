<?php 
include_once('../Interface/iEnity.php');
include_once('../Abstract/bai13OOPChien.php');
class Category extends BaseRow implements iEnity{
    // hàm khởi tạo
    public function __construct($id , $name )
    {
        BaseRow::__construct($id,$name);
    }
    

}

?>