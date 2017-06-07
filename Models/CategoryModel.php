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


class CategoryModel extends BaseModel
{
    private  $_table = 'category';

    public function getAll(){
        $result = $this->get('SELECT * FROM '.$this->_table);
        return $result;
    }
}