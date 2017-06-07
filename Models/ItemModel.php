<?php
/**
 * Created by PhpStorm.
 * User: cal
 * Date: 6/4/17
 * Time: 12:02 PM
 */

namespace App\Models;
include_once('Models/BaseModel.php');
use App\Models\BaseModel;


class ItemModel extends BaseModel
{
    private  $_table = 'items';
    private  $_table_c = 'category';

    public function getAll(){
        $result = $this->get('SELECT '.
        $this->_table.'.`code` ,'.
        $this->_table.'.`name` ,'.
        $this->_table.'.`brand` ,'.
        $this->_table.'.`model` ,'.
        $this->_table_c.'.`name` AS `category`,'.
        $this->_table.'.`price` '
        .'FROM '.$this->_table.' LEFT JOIN '.$this->_table_c.' ON '.$this->_table.'.category = '.$this->_table_c.'.id ');
        return $result;
    }
}