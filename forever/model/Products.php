<?php
class Products extends Model{

	public function search($req){

		if(!is_numeric($req)){
			$sql="SELECT * FROM products WHERE title LIKE '%$req%' AND product_ref!=0";
		}
		else
		{
			$sql="SELECT * FROM products WHERE product_ref=$req AND product_ref!=0" ;
		}
		
		$pre = $this->db->prepare($sql); 
		$pre->execute(); 
		return $pre->fetchAll();
	}
}