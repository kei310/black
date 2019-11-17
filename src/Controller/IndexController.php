<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
use App\Model\Master\Master;


class IndexController extends AppController{

    var $UserObject;

     public function initialize(){
         parent::initialize();
    }


    public function index(){
    
			
		$this->layout = "";
    }



}
?>
