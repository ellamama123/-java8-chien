<?php 

class Category {
    private $id  ,$name;
    public function __construct($id , $name )
    {
        $this->id = $id;
        $this->name = $name;
    }
    public function getID()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

}

?>