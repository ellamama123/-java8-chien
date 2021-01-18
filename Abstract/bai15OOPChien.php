<?php 
abstract class BaseDao {
    
    public function __construct() {
       
    }
      public function insert( $row , $name)
     {
        $db = Database::getInstants();
        if($db->insertTable($name,$row))
        {
            return $db;
        }
        return 0;
     }
    public function update( $row , $name)
    {
        $db = Database::getInstants();
        if($db->updateTable($name,$row))
        {
            return $db;
        }
        return 0;
    }
     public function delete($row,$name) {
        $db = Database::getInstants();
        if($db->deleteTable($name,$row))
        {
            return $db;
        }
        return 0;
     }
    public function findAll($name){
        $db = Database::getInstants();
        return $db->selectTable($name);
     }
    public function findbyId($id,$name){
        $db = Database::getInstants();
        foreach($db->selectTable($name) as $key => $product)
        {
            if($product->getID() == $id)
            {
                return $product;
            }
        }
        return null;
     }
     public function findByName($name)
     {
         $db = Database::getInstants();
         foreach($db->getProductTable() as $key => $product)
         {
             if($product->getName() == $name)
             {
                 return $db->getProductTable()[$key];
             }
         }
         return null;
     }
}
?>