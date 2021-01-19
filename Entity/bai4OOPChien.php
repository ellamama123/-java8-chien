<?php 
include_once('../Interface/iEnity.php');
class Accessotion extends BaseRow implements iEnity {

    // hàm khởi tạo
    public function __construct($id , $name )
    {
        BaseRow::__construct($id,$name);
    }


}

?>