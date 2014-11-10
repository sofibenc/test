<?php 
class WhoweareController extends Controller{
	
	function index(){
		$d['menu_selected']="Whoweare";
		$this->set($d);
		$this->render('index'); 
	}
}