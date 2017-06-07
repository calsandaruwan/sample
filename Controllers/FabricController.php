<?php
namespace App\Controllers;

include_once('Controllers/BaseController.php');
include_once('Models/FabricModel.php');
//use App\Controllers\BaseController;
use App\Models\FabricModel as Fabric;


class FabricController extends BaseController
{
    public $_fabric ='';

    public function __construct()
    {
        $this->_fabric = new Fabric();
    }

    public function Lists(){
        $title =  'Fabric List';
        $result = $this->_fabric->getAll();
        include_once('Views/FabricView.php');
    }

}