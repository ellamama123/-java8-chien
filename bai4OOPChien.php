<?php 

class Accessotion extends BaseRow {
    private $id;
    private $name;

    // hàm khởi tạo
    public function __construct($id , $name )
    {
        $this->id = $id;
        $this->name = $name;
    }

    //hàm get id
    public function getID()
    {
        return $this->id;
    }

    // hàm get name
    public function getName()
    {
        return $this->name;
    }

    // hàm set id
    public function setId($id)
    {
        $this->id = $id;
    }

    //hàm set name
    public function setName($name)
    {
        $this->name = $name;
    }

}

?>