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


class FabricModel extends BaseModel
{
    private  $_table = 'items';
    private  $_table_f = 'fabric';

    public function getAll(){
        $result = $this->get('SELECT * FROM '.$this->_table.' LEFT JOIN '.$this->_table_f.' ON '.$this->_table.'.id = '.$this->_table_f.'.item_id WHERE '.$this->_table.'.category = 1');
        return $result;
    }
}