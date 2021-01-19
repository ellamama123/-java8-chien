<?php 
interface iDao {
    function insert($row,$name);
    function update($row,$name);
    function delete($row,$name);
    function findAll($name);
    function findById($id,$name);
    function findByName($name);
}
?>