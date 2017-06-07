<?php

namespace App\Models;
include_once('Models/Connection.php');

class BaseModel
{
    public $_conn='';

    public function __construct()
    {
        $this->_conn = \App\Models\Connection::get();
    }

    public function query($query){
        $result = $this->_conn->query($query);
        if ($result){
            return $result;
        }
        return false;
    }

    public function get($query,$type=false){
        $result = $this->query($query);
        echo $query;
        if($result && $result->num_rows>0){
            if($type=='row'){
                return $result->fetch_row();
            }else{
                $res_array=[];
                while($row = $result->fetch_assoc()){
                    $res_array[] = $row;
                }
                return $res_array;
            }
        }
        return false;
    }
}