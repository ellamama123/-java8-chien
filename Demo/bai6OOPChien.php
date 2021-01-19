<?php 

include_once('../Database/bai5OOPChien.php');
include_once('../Entity/bai1OOPChien.php');
include_once('../Entity/bai3OOPChien.php');
include_once('../Entity/bai4OOPChien.php');

class DatabaseDemo{
    public function insertTableTest(){
        $db = Database::getInstants();
        $row = new Product(3,"chien",3);
        $row1 = new Category(2,"ab");
        $row2 = new Accessotion(3,"a");
        $db->insertTable(PRODUCT,$row);
        $db->insertTable(CATEGORY,$row1);
        $db->insertTable(ACCESSORY,$row2);
    }

    public function selectTableTest(){
        $db = Database::getInstants();
        var_dump($db->selectTable(PRODUCT));
        var_dump($db->selectTable(CATEGORY));
        var_dump($db->selectTable(ACCESSORY));
    }

    public function updateTableTest()
    {
        $db = Database::getInstants();
        $row = new Product(3,"hoa",3);
        $row1 = new Category(2,"huynh");
        $row2 = new Accessotion(3,"kien");
        $db->updateTable(PRODUCT,$row);
        $db->updateTable(CATEGORY,$row1);
        $db->updateTable(ACCESSORY,$row2);
    }

    public function deleteTableTest()
    {
        $db = Database::getInstants();
        $row = new Product(3,"hoa",3);
        $row1 = new Category(2,"huynh");
        $row2 = new Accessotion(3,"kien");
        $db->deleteTable(PRODUCT,$row);
        $db->deleteTable(CATEGORY,$row1);
        $db->deleteTable(ACCESSORY,$row2);
    }

    public function truncateTableTest()
    {
        $db = Database::getInstants();
        $db->truncateTable(PRODUCT);
        $db->truncateTable(CATEGORY);
        $db->truncateTable(ACCESSORY);
    }

    public function initDatabase()
    {
        $db = Database::getInstants();
        for($i=0;$i<10;$i++)
        {
            $row = new Product((rand(0,100)),substr(md5(microtime()),rand(0,26),5),(rand(0,100)));
            $row1 = new Category((rand(0,100)),substr(md5(microtime()),rand(0,26),5));
            $row2 = new Accessotion((rand(0,100)),substr(md5(microtime()),rand(0,26),5));
            $db->insertTable(PRODUCT,$row);
            $db->insertTable(CATEGORY,$row1);
            $db->insertTable(ACCESSORY,$row2);
        }
    }

    public function printTableTest()
    {
        $db = Database::getInstants();
        var_dump($db);
    }

    public function updateTableTest1()
    {
        $db = Database::getInstants();
        $row = new Product(3,"hoa",3);
        $row1 = new Category(2,"huynh");
        $row2 = new Accessotion(3,"kien");
        $db->updateTable1(PRODUCT,3,$row);
        $db->updateTable1(CATEGORY,2,$row1);
        $db->updateTable1(ACCESSORY,3,$row2);   
    }
}

$test= new DatabaseDemo();
$test->insertTableTest();
var_dump($test);

?>