<?php 
abstract class BaseRow{
    private $id ;
    private $name;
    public function setData($id , $name)
    {
        $this->id = $id ;
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function getID(){
        return $this->id;
    }
    public function setID($id){
        $this->id = $id;
    }
    public function setName($name){
        $this->name = $name;
    }
    
}

?>