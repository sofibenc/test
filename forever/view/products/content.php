<div id="left">
	<?php require ("search_field.php");?>
	<?php echo $left_menu;?>
</div>
<div id="products-wrapper">
	<div id="categories-content">
		<div id="back_button">
			<?php if ($parent_cat) :?>
					<a class="back_button" href="/forever/products/display/<?php echo $grandparents['name'];?>">
						<div id="back_button_text">
						<?php echo ($grandparents) ? $grandparents['title'] : "Sommaire";?>
						</div>
					</a>
			<?php endif ?>
		</div>
		<?php if (!$parent_cat) :?>
			<div id="root-category-title">
				<h3>
					Plus de 200 Produits Aloe Vera pour votre Bien-être :
				</h3>
			</div>
		<?php else : ?>
			<div id="category-title">
				<h3>
					<?php echo $title." :"; ?>
				</h3>
			</div>
		<?php endif ?>
		
		<?php foreach ($body_content as $key): ?>
			<?php 
				$page_link=($key['product_ref']==0)? "/forever/products/display/".$key['name'] : "/forever/products/display/".$parent_cat."/".$key['name'];
				$img_link=($key['product_ref']==0) ? "src=\"/forever/img/categories/".$key["id"].".jpg\"" : "width=\"180\" height=\"180\" src=\"/forever/img/products/".$key["product_ref"].".jpg\"";
			?>
			
			<?php if ($key['product_ref']==0) :?>
				<div id="desc_image_categories">
					<a title="<?php echo $key['title'];?>" href="<?php echo $page_link?>">
						<div>
							<div class="category_title" >
								<?php echo $key['title']; ?>
							</div>
							<img height="150" width="200" <?php echo $img_link;?> alt="<?php echo $key['title']; ?>"/>
						</div>
					</a>
				</div>
			<?php else: ?>
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
			<?php endif ?>
		<?php endforeach ?>
	</div>
</div>
