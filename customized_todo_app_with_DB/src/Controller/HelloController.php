<?php
namespace App\Controller;

class HelloController extends AppController {
	public $autoRender = true;
	public $name = 'Hello';

	public function index(){
		$this->viewBuilder()->autoLayout(false);
	}
		
	
}