<?php 

class Category implements iEnity{
    private $id;
    private $name;
    // hàm khởi tạo
    public function __construct($id , $name )
    {
        $this->setData($id,$name);
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
    

}

?>