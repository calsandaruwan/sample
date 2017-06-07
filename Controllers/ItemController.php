<?php
namespace App\Controllers;

include_once('Controllers/BaseController.php');
include_once('Models/ItemModel.php');
include_once('Models/CategoryModel.php');
use App\Controllers\BaseController;
use App\Models\ItemModel as Item;
use App\Models\CategoryModel as Category;


class ItemController extends BaseController
{
    public $_item ='';
    public $_category ='';

    public function __construct(){
        $this->_item = new Item();
        $this->_category = new Category();
    }

    public function Lists(){
        $title =  'Item List';
        $result = $this->_item->getAll();
        include_once('Views/ItemView.php');
    }

    public function Add(){
        $title =  'Add New Item';
        $categories = $this->_category->getAll();
        $code = 'fa-'.uniqid();
        $message = '';
        if(isset($_POST['submit'])){
            $message = 'submitted';
        }
        include_once('Views/ItemAdd.php');
    }

}