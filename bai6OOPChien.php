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
        $this->insertTable(pro,$row);
        $this->insertTable(cate,$row1);
        $this->insertTable('accessory',$row2);
    }
    public function selectTableTest(){
        var_dump($this->selectTable(pro));
        var_dump($this->selectTable(cate));
        var_dump($this->selectTable('accessory'));
    }
    public function updateTableTest()
    {
        $row = new Product(3,"hoa",3);
        $row1 = new Category(2,"huynh");
        $row2 = new Accessotion(3,"kien");
        $this->updateTable(pro,$row);
        $this->updateTable(cate,$row1);
        $this->updateTable(access,$row2);
    }
    public function deleteTableTest()
    {
        $row = new Product(3,"hoa",3);
        $row1 = new Category(2,"huynh");
        $row2 = new Accessotion(3,"kien");
        $this->deleteTable(pro,$row);
        $this->deleteTable(cate,$row1);
        $this->deleteTable(access,$row2);
    }
    public function truncateTableTest()
    {
        $this->truncateTable(pro);
        $this->truncateTable(cate);
        $this->truncateTable(access);
    }
    public function initDatabase()
    {
        for($i=0;$i<10;$i++)
        {
            $row = new Product((rand(0,100)),substr(md5(microtime()),rand(0,26),5),(rand(0,100)));
            $row1 = new Category((rand(0,100)),substr(md5(microtime()),rand(0,26),5));
            $row2 = new Accessotion((rand(0,100)),substr(md5(microtime()),rand(0,26),5));
            $this->insertTable(pro,$row);
            $this->insertTable(cate,$row1);
            $this->insertTable(access,$row2);
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
        $this->updateTable1(pro,3,$row);
        $this->updateTable1(cate,2,$row1);
        $this->updateTable1(access,3,$row2);   
    }


}
$test= new DatabaseDemo();
$test->initDatabase();
var_dump($test);

?>