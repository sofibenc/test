<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/forever/css/style.css" />
        <link rel="stylesheet" href="/forever/css/normalize.css" />
        <link rel="stylesheet" href="/forever/jquery.bxslider/jquery.bxslider.css" />
        <link rel="stylesheet" href="/forever/tabcontent/tabcontent.css" />
		<link rel="stylesheet" href="/forever/jquery.treeview/jquery.treeview.css" />
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>FLP</title>
    </head>
    
    <!--[if IE 6 ]><body class="ie6 old_ie"><![endif]-->
    <!--[if IE 7 ]><body class="ie7 old_ie"><![endif]-->
    <!--[if IE 8 ]><body class="ie8"><![endif]-->
    <!--[if IE 9 ]><body class="ie9"><![endif]-->
    <!--[if !IE]><!--><body><!--<![endif]-->
		<div id="titre_principal_wrapper">
			<div id="titre_principal">
				<div id="website_name">
					<img height="95" src="/forever/img/logo/logo.png" >
				</div>
			</div>
			<div id="sous-titre">
				<h2>Distributeur agréé</h2>
			</div>
		</div>
		
		<nav id="menu" class="gradient">
			<ul>
				<li <?php echo $menu_selected == "Home" ? "class=\"selected\"" : ""?>><a href="/forever">Accueil</a></li>
				<li <?php echo $menu_selected == "Products" ? "class=\"selected\"" : ""?>><a href="/forever/products/display/">Produits</a></li>
				<li <?php echo $menu_selected == "Whoweare" ? "class=\"selected\"" : ""?>><a href="/forever/whoweare">Qui sommes nous</a></li>
				<li <?php echo $menu_selected == "Become_distributor" ? "class=\"selected\"" : ""?>><a href="/forever/become_distributor">Devenir Distributeur</a></li>
				<li <?php echo $menu_selected == "Contact" ? "class=\"selected\"" : ""?>><a href="/forever/contact">Contact</a></li>
			</ul>
		</nav>
		
		<div id="content-home">
		<?php echo $content_for_layout; ?>
		</div>
		
		<footer>
			
        </footer>
		
		<script src="/forever/js/jquery-1.10.2.min.js"></script>
		<script src="/forever/jquery.bxslider/jquery.bxslider.js"></script>
		<script src="/forever/multiple_expand/scripts/expand.js"></script>
		<script src="/forever/tabcontent/tabcontent.js"></script>
		<script src="/forever/jquery.treeview/jquery.treeview.min.js"></script>

		<script>
		var slider = $('.bxslider').bxSlider({
		minSlides: 3,
		maxSlides: 3,
		slideWidth: 360,
		slideMargin: 10,
		autoDelay : 3,
		moveSlides: 1,
		auto : true,
		pager: false
		});
		
		$('.bx-next, .bx-prev, .bx-pager a').click(function(){
		// time to wait (in ms)
		var wait = 1000;
		setTimeout(function(){slider.startAuto();}, wait);
		});
		</script>
		<script>
		$(function() {
			$("#products-content").expandAll({
			expTxt : "[Afficher plus de détails]", 
			cllpsTxt : "[Masquer les détails]",
			showMethod : "show",
			hideMethod : "hide",
			ref : "div.collapse"		
			});   
		});
		</script>
		<script>
		var myflowers=new ddtabcontent("flowertabs") //enter ID of Tab Container
		myflowers.setpersist(true) //toogle persistence of the tabs' state
		myflowers.setselectedClassTarget("link") //"link" or "linkparent"
		myflowers.init()
		</script>
		<script>
		jQuery(document).ready(function(){
			$("#navigation").treeview({
			collapsed: true,
			unique: true,
			animated:"fast",
			persist: "location"
			});
		});
		
		document.getElementById('navigation').style.visibility="visible";
		</script>
		<script>
			function change(image)
			{
				source=document.getElementById('desc_image').getElementsByTagName( 'img' )[0]
				source.src=image
			}
		</script>
    </body>
</html>
