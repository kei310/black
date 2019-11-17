<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
use App\Model\Master\Master;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;
use App\Form\EntryForm;


class FormController extends AppController{

    var $UserObject;

     public function initialize(){
         parent::initialize();
    }


    public function index(){
    
			
		$this->layout = "";
    }

    public function confirm(){
        $this->data['name'] = isset($_POST['name']) ? $_POST['name']:'';
        $this->data['age'] = isset($_POST['age']) ? $_POST['age']:'';
        $this->data['job'] = isset($_POST['job']) ? $_POST['job']:'';
        $this->data['profile'] = isset($_POST['profile']) ? $_POST['profile']:'';



    }



}
?>
