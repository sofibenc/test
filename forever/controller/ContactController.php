<?php 
class ContactController extends Controller{
	
	function index(){
		$d['menu_selected']="Contact";
		$this->set($d);
		$this->render('index'); 
	}
}