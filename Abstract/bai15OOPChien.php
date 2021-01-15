<?php 
abstract class BaseDao {
    
    public function __construct() {
       
    }
      public function insert( $row , $name)
     {
        $db = new Database();
        if($db->insertTable($name,$row))
        {
            return $db;
        }
        return 0;
     }
    public function update( $row , $name)
    {
        $db = new Database();
        if($db->updateTable($name,$row))
        {
            return $db;
        }
        return 0;
    }
     public function delete($row,$name) {
        $db = new Database();
        if($db->deleteTable($name,$row))
        {
            return $db;
        }
        return 0;
     }
    public function findAll($name){
        $db= new Database();
        return $db->selectTable($name);
     }
    public function findbyId($id,$name){
        $db = new Database();
        foreach($db->selectTable($name) as $key => $product)
        {
            if($product->getID() == $id)
            {
                return $product;
            }
        }
        return null;
     }
}
?>