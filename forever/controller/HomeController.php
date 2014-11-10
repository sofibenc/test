<?php 
class HomeController extends Controller{
	
	function index(){

		$this->loadModel('Highlighted_products'); 
		$this->loadModel('Products'); 
		$d['menu_selected']="Home";
		$this->set($d);

		$data=$this->Highlighted_products->find(array(
			'fields'     => 'product_ref'));

		foreach ($data as $key)
		{
			$result=$this->Products->findFirst(array(
					'conditions' => array('product_ref'=>$key['product_ref'])
			));

			$result2=$this->Products->findFirst(array(
					'conditions' => array('id'=>$result['parent_id'])
			));

			$result['category']=$result2['name'];

			$data_match[]=$result;
		}

		
		$d['data']=$data_match;

		$this->set($d);
		$this->render('index'); 
	}
}