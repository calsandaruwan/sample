<?php
namespace App\Controllers;

include_once('Controllers/BaseController.php');
include_once('Models/CosmeticModel.php');
use App\Controllers\BaseController;
use App\Models\CosmeticModel as Fabric;


class CosmeticController extends BaseController
{
    public $_fabric ='';

    public function __construct()
    {
        $this->_fabric = new Fabric();
    }

    public function Lists(){
        $title =  'Cosmetic List';
        $result = $this->_fabric->getAll();
        include_once('Views/CosmeticView.php');
    }

}