<?php
class SimplestorageController extends AppController {

	public function index() {

	}

	public function material(){
		$this->set('materiales', $this->Material->find('all'));
	}
	
}
