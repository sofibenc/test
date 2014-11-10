<?php 
class ProductsController extends Controller{

	private $data_left_menu;
	private $html_left_menu;
	private $d;

	function __construct($request) {
        parent::__construct($request);

        $this->loadModel('Products'); 
        $this->data_left_menu= $this->Products->find(array(
			'fields'     => 'id,name,title,parent_id,video_url,description,product_ref'));

        $this->item="";
		
		$this->html_left_menu=$this->create_left_menu_elements(0,0,$this->data_left_menu);

		$this->d['left_menu']=$this->html_left_menu;
		$this->d['menu_selected']="Products";
    }

	function display($cat_1=null,$cat_2=null)
	{
		$this->d['cat_selected'] = $cat_1;
		//load model
		$this->loadModel('Products'); 
		$this->loadModel('Products_details'); 
		
		//data for calling products.php
		if ($cat_1 && $cat_2)
		{
			//fetch current data and render
			$key_products = $this->Products->findFirst(array(
					'conditions' => array('name'=>$cat_2)));
			$this->d['data'] =$key_products;

			//fetch products details
			$key_products_details = $this->Products_details->findFirst(array(
					'conditions' => array('id'=>$key_products['id'])));
			$this->d['data_details'] =$key_products_details;

			//grandparents for "back" button
			$this->d['parent_cat']=$cat_1;
			$key_1=$this->Products->findFirst(array(
					'conditions' => array('id'=>$key_products['parent_id'])
			));
			$this->d['grandparents']=$key_1;

			//send data and render
			$this->set($this->d);
			$this->render('products'); 
		}
		//data for calling contents.php
		else if ($cat_2==null)
		{
			//body_content
			$key=$this->Products->findFirst(array(
					'conditions' => array('name'=>$cat_1),
					'fields'     => 'id,name,title,parent_id'
			));

			$id=$key['id'];
			$this->d['title']=$key['title'];

			if ($cat_1 == null) $id=0;
			
			$data_body_content = $this->Products->find(array('conditions' => array('parent_id'=>$id)));
			$this->d['body_content']=$data_body_content;
			
			//grandparents for "back" button
			$this->d['parent_cat']=$cat_1;
			$key_1=$this->Products->findFirst(array(
					'conditions' => array('id'=>$key['parent_id'])
			));
			$this->d['grandparents']=$key_1;

			//send data and render
			$this->set($this->d);
			$this->render('content');
		}
	}

	function search()
	{
		$this->loadModel('Products'); 
		
		$result_req=$this->Products->search($_POST['search_text']);

		if ($result_req)
		{
			foreach ($result_req as $key)
			{
				$result=$this->Products->findFirst(array(
						'conditions' => array('id'=>$key['parent_id'])
				));
				$key['parent_name']=$result['name'];
				$data[]=$key;
			}
			$this->d['body_content']=$data;
		}
		
		$this->set($this->d);
		$this->render('search_result');
	}

	private function create_left_menu_elements($parent, $niveau, $array) {
 
		$html = "";
		$parent_name="";

		$niveau_precedent = 0;
		 
		if (!$niveau && !$niveau_precedent) $html .= "\n<ul id=\"navigation\" class=\"dropdown\">\n";
		 
		foreach ($array AS $noeud) {
		 
			if ($parent == $noeud['parent_id']) {
		 
				if ($niveau_precedent < $niveau) $html .= "\n<ul>\n";

				//Trouver le nom du parent
				foreach ($array as $key){
					if ($key['id']==$parent)
						$parent_name=$key['name'];
				}

				//Generate links
				if ($noeud['product_ref']!=0)
					$html .= "<li id=\"product_item_li\" class=\"".$parent_name."\"><a href=\"/forever/products/display/".$parent_name."/".$noeud['name']."\">" . $noeud['title']."</a>";
				else if ($noeud['parent_id'] == 0)
					$html .= "<li class=\"category ".$noeud['name']."\"><a href=\"/forever/products/display/".$noeud['name']."\">" . $noeud['title']."</a>";
				else 
					$html .= "<li class=\"subcategory ".$noeud['name']."\"><a href=\"/forever/products/display/".$noeud['name']."\">" . $noeud['title']."</a>";
			 
				$niveau_precedent = $niveau;
			 
				$html .= $this->create_left_menu_elements($noeud['id'], ($niveau + 1), $array);
			}
		}
		 
		if (($niveau_precedent == $niveau) && ($niveau_precedent != 0)) $html .= "</ul>\n</li>\n";
		else if ($niveau_precedent == $niveau) $html .= "</ul>\n";
		else $html .= "</li>\n";
		 
		return $html;
	}
}