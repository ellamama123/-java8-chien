<?php 

class Category extends BaseRow{
    // hàm khởi tạo
    public function __construct($id , $name )
    {
        $this->setData($id,$name);
    }
    

}

?>