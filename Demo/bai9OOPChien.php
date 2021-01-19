<?php 
include_once('../Database/bai5OOPChien.php');
include_once('../Entity/bai1OOPChien.php');
include_once('../Entity/bai3OOPChien.php');
include_once('../Entity/bai4OOPChien.php');
include_once('../Dao/bai8OOPChien.php');


class CategoryDAODemo {
    public function insertTest()
    {
        $catedow = new CategoryDAO();
        $row = new Category(4,"Nam");
        var_dump($catedow->insert($row,CATEGORY));
    }
    public function updateTest()
    {
        $catedow = new CategoryDAO();
        $row = new Category(4,"Hoàng");
        var_dump($catedow->update($row,CATEGORY));
    }
    public function deleteTest()
    {
        $catedow = new CategoryDAO();
        $row = new Category(4,"Hoàng");
        $catedow->delete($row,CATEGORY);
    }
    public function findAllTest()
    {
        $catedow = new CategoryDAO();
        return $catedow->findAll(CATEGORY);
    }
    public function findByIDTest()
    {
        $catedow = new CategoryDAO();
        $name = "Nam";
        return $catedow->findByID($name,CATEGORY);
    }

}
$db = new CategoryDAODemo();
$db->insertTest();

var_dump($db);

?>