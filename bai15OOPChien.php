<?php 
abstract class BaseDao {
    public function __construct() {
       
    }
     abstract public function insert( $row);
     abstract public function update( $row);
     abstract public function delete( $row);
     abstract public function findAll();
     abstract public function findbyId($id);
}
?>