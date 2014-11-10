<div id="left">
	<?php require ("search_field.php");?>
	<?php echo $left_menu;?>
</div>
<div id="products-wrapper">
	<div id="products-content" >
		<div id="back_button">	
		<a class="back_button" href="/forever/products/display/<?php echo $grandparents['name'];?>">
			<div id="back_button_text">
			<?php echo $grandparents['title'];?>
			</div>
		</a>
		</div>
		<div id="product_description">
			<h3>
				<span class="product_title"><?php echo ($data['title_info']) ? $data['title']." - ".$data['title_info'] : $data['title'] ; ?> : </span>
			</h3>
			<div id="desc_wrapper">
				<div id="desc_image">
					<img width="200" height="200" src="/forever/img/products/<?php echo $data['product_ref'];?>.jpg" alt="<?php echo $data['title']; ?>"/>
				</div>
				<div id="desc_text">
					<div>
					<?php echo $data['description']; ?>
					</div>
				</div>
			</div>
		</div>
		<?php if ($data['ref_array']) : ?>
		<div id="ref_array">
			<div id="products_models_text">
				<p>Selectionnez le modèle :</p>
			</div>
			<div id="products_models_images">
				<?php $img_data=explode("-",$data['ref_array']) ;
				  foreach ($img_data as $k):?>
				  <img width="30" height="30" onclick="change('/forever/img/products/<?php echo $k;?>.jpg')" src="/forever/img/products/<?php echo $k."t.png.jpg";?>" />
				  <?php endforeach ?>
			</div>
		</div>
		<?php endif ?>
		
		<div id="commander">
			<p>
				<a href="#">
					<span style="color: #ff6600;">Contactez votre Distributeur pour commander ce produit</span>
				</a>
				<?php if (!$data['ref_array']) : ?>
				| Réf : <?php echo $data['product_ref'];?>
				<?php else: ?>
				<BR>
				Réf : <?php echo $data['ref_array'];?>
				<?php endif ?>
				
				
			</p>
		</div>
		
		<div id="products-details">
			<div id="left_details">
				<h3>Ingrédients</h3>
				<?php echo $data_details['ingredients'] ? $data_details['ingredients'] : "N/A";?>
			</div>
			<div id="right_details">
				<h3>Points Forts</h3>
				<?php echo $data_details['strengths'] ? $data_details['strengths'] : "N/A";?>
			</div>
			<div id="left_details">
				<h3>Mode d'emploi</h3>
				<?php echo $data_details['user_manual'] ? $data_details['user_manual'] : "N/A";?>
			</div>
			<div id="right_details">
				<h3>Cible</h3>
				<?php echo $data_details['target'] ? $data_details['target'] : "N/A";?>
			</div>
			<div id="left_details">
				<h3>Bénéfices</h3>
				<?php echo $data_details['earnings'] ? $data_details['earnings'] : "N/A";?>
			</div>
			<?php if ($data_details['nutritional_table']) :?>
			<div id="right_details">
				<h3>Valeur nutritionnelle</h3>
				<?php echo $data_details['nutritional_table'] ? $data_details['nutritional_table'] : "N/A";?>
			</div>
			<?php endif ?>
		</div>
	</div>
</div>
