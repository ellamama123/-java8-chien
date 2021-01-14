<?php 

include('bai5OOPChien.php');
include('bai1OOPChien.php');
include('bai3OOPChien.php');
include('bai4OOPChien.php');

class DatabaseDemo extends Database {
    public function insertTableTest(){
        $row = new Product(3,"chien",3);
        $row1 = new Category(2,"ab");
        $row2 = new Accessotion(3,"a");
        $this->insertTable(PRODUCT,$row);
        $this->insertTable(CATEGORY,$row1);
        $this->insertTable(ACCESSORY,$row2);
    }

    public function selectTableTest(){
        var_dump($this->selectTable(PRODUCT));
        var_dump($this->selectTable(CATEGORY));
        var_dump($this->selectTable(ACCESSORY));
    }

    public function updateTableTest()
    {
        $row = new Product(3,"hoa",3);
        $row1 = new Category(2,"huynh");
        $row2 = new Accessotion(3,"kien");
        $this->updateTable(PRODUCT,$row);
        $this->updateTable(CATEGORY,$row1);
        $this->updateTable(ACCESSORY,$row2);
    }

    public function deleteTableTest()
    {
        $row = new Product(3,"hoa",3);
        $row1 = new Category(2,"huynh");
        $row2 = new Accessotion(3,"kien");
        $this->deleteTable(PRODUCT,$row);
        $this->deleteTable(CATEGORY,$row1);
        $this->deleteTable(ACCESSORY,$row2);
    }

    public function truncateTableTest()
    {
        $this->truncateTable(PRODUCT);
        $this->truncateTable(CATEGORY);
        $this->truncateTable(ACCESSORY);
    }

    public function initDatabase()
    {
        for($i=0;$i<10;$i++)
        {
            $row = new Product((rand(0,100)),substr(md5(microtime()),rand(0,26),5),(rand(0,100)));
            $row1 = new Category((rand(0,100)),substr(md5(microtime()),rand(0,26),5));
            $row2 = new Accessotion((rand(0,100)),substr(md5(microtime()),rand(0,26),5));
            $this->insertTable(PRODUCT,$row);
            $this->insertTable(CATEGORY,$row1);
            $this->insertTable(ACCESSORY,$row2);
        }
    }

    public function printTableTest()
    {
        var_dump($this);
    }

    public function updateTableTest1()
    {
        $row = new Product(3,"hoa",3);
        $row1 = new Category(2,"huynh");
        $row2 = new Accessotion(3,"kien");
        $this->updateTable1(PRODUCT,3,$row);
        $this->updateTable1(CATEGORY,2,$row1);
        $this->updateTable1(ACCESSORY,3,$row2);   
    }
}

$test= new DatabaseDemo();
$test->insertTableTest();
var_dump($test);

?>