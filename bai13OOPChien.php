<?php 
abstract class BaseRow{
    abstract public function getName();
    abstract public function getID();
    abstract public function setID($id);
    abstract public function setName($name);
}

?>