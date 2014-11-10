<div id="home_leftside">
	<div id="home-title">
	Les news :
	</div>
	<div class="viewport left_wth">

	</div>
	
	<div id="home-title">
	Actualités produits :
	</div>
	<div class="viewport left_wth">

	</div>
</div>

<div id="home_rightside">
	<div id="home-title">
	Les produits de l'année :
	</div>
	<div id="view_gallery" class="right_wth">
		<div class="bxslider">
			<?php foreach ($data as $key):  ?>
			<div id="gallery_item">
				<a href="/forever/products/display/<?php echo $key['category'];?>/<?php echo $key["name"];?>">
				<div style="height:100px">
				<img style="display:inline-block;" width="100" height="100" src="/forever/img/products/<?php echo $key['product_ref'];?>.jpg">
				</div>
				<?php echo $key['title']; ?>
				</a>
			</div>
			<?php endforeach ?>
		</div>
	</div>
	
	<div id="home-title">
	Les articles :
	</div>
	<div class="viewport right_wth">
	</div>
</div>


