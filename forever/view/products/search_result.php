<div id="left">
	<?php require ("search_field.php");?>
	<?php echo $left_menu;?>
</div>
<div id="products-wrapper">
	<div id="categories-content">
		<div id="search_result_title">
			Résultat de la recherche :
		</div>
	
		<?php if (isset($body_content)) : ?>
		<?php foreach ($body_content as $key): ?>
		<?php 
			$parent_cat="";
			$page_link=($key['product_ref']==0)? "/forever/products/display/".$key['name'] : "/forever/products/display/".$key['parent_name']."/".$key['name'];
			$img_link=($key['product_ref']==0) ? "src=\"/forever/img/categories/".$key["id"].".jpg\"" : "width=\"180\" height=\"180\" src=\"/forever/img/products/".$key["product_ref"].".jpg\"";
		?>
		<div id="desc_image_products">
			<a title="<?php echo $key['title'];?>" href="<?php echo $page_link?>">
				<div>
					<img width="110" height="110"  <?php echo $img_link;?> alt="<?php echo $key['title']; ?>"/>
					<div>
						<?php echo $key['title']."<br><i>".$key['title_info'].", Ref : ".$key['product_ref']."</i>";?>
					</div>
				</div>
			</a>
		</div>
		<?php endforeach ?>
		<?php else: ?>
		0 produits trouvés
		<?php endif ?>
	</div>
</div>