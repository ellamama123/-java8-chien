<?php 
define('pro', 'product');
define('cate', 'category');
define('access', 'accessory');
class Database {
    private $productTable = array(),$categoryTable= array(),$accessoryTable= array(),$instants;
    public function getCategoryTable()
    {
        return $this->categoryTable;
    }
    public function getProductTable()
    {
        return $this->productTable;
    }
    public function insertTable($name = '' , $row )
    {
        switch($name)
        {
            case pro: 
                array_push($this->productTable,$row);
                return 1;
                break;
            case cate:
                array_push($this->categoryTable,$row);
                return 1;
                break;
            case access:
                array_push($this->accessoryTable,$row);
                return 1;
                break;
            default:
                return 0;
                break;
        }
    }
    public function selectTable($name = '')
    {
        switch($name)
        {
            case pro: return $this->productTable;break;
            case cate:return $this->categoryTable;break;
            case access:return $this->categoryTable;break;
            default:break;
        }
    }
    public function updateTable($name = '',$row)
    {
        switch($name)
        {
            case pro:
                foreach($this->productTable as $key => $item)
                {
                    if($item->getID() == $row->getID())
                    {
                        $this->productTable[$key] = $row;
                        return 1;
                    }
                }
                return 0;
                break;
            case cate:
                foreach($this->categoryTable as $key => $item)
                {
                    if($item->getID() == $row->getID())
                    {
                        $this->categoryTable[$key] = $row;
                        return 1;
                    }
                }
                return 0;
                break;
            case access: 
                foreach($this->accessoryTable as $key => $item)
                {
                    if($item->getID() == $row->getID())
                    {
                        $this->accessoryTable0[$key] = $row;
                        return 1;
                    }
                }
                return 0;
                break;
            default:
                return 0;
                break;
        }
    }
    public function deleteTable($name= '', $row)
    {
        switch($name)
        {
            case pro:
                foreach($this->productTable as $key => $item)
                {
                    if($item->getID() == $row->getID())
                    {
                        unset($this->productTable[$key]);
                        return 1;
                    }              
                }
                return 0;
                break;
            case cate:
                foreach($this->categoryTable as $key => $item)
                {
                    if($item->getID() == $row->getID())
                    {
                        unset($this->categoryTable[$key]);
                        return 1;
                    }              
                }
                return 0;
                break;
            case access: 
                foreach($this->accessoryTable as $key => $item)
                {
                    if($item->getID() == $row->getID())
                    {
                        unset($this->accessoryTable[$key]);
                        return 1;
                    }              
                }
                return 0;
                break;
            default:
                return 0;
                break;
        }
    }
    public function truncateTable($name= '')
    {
        switch($name)
        {
            case pro:
               $this->productTable = array();
                break;
            case cate:
                $this->categoryTable = array();
                break;
            case access: 
                $this->accessoryTable = array();
                break;
            default:break;
        }
    }
    public function updateTable1($name = '' , $id , $row)
    {
        switch($name)
        {
            case pro:
                foreach($this->productTable as $key => $item)
                {
                    if($item->getID() == $id)
                    {
                        $this->productTable[$key] = $row;
                        return 1;
                    }
                }
                return 0;
                break;
            case cate:
                foreach($this->categoryTable as $key => $item)
                {
                    if($item->getID() == $id)
                    {
                        $this->categoryTable[$key] = $row;
                        return 1;
                    }
                }
                return 0;
                break;
            case access: 
                foreach($this->accessoryTable as $key => $item)
                {
                    if($item->getID() == $id)
                    {
                        $this->accessoryTable[$key] = $row;
                        return 1;
                    }
                }
                return 0;
                break;
            default:
                return 0;
                break;
        }
    }
}



?>