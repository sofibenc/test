<?php 
class Become_distributorController extends Controller{
	
	function index(){
		$d['menu_selected']="Become_distributor";
		$this->set($d);
		$this->render('index'); 
	}
}