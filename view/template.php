<!DOCTYPE html>

<html lang='fr'>
    <head>
    	<title><?=  $title ?></title>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, user-scalable=0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link rel="stylesheet" href="./css/projet.css" />         
    </head>
	
    <body>
    	<div id="bloc_page">
		<?php
		
		if(empty($noNavBar)){
			require('navbar.php');
			echo "<div style='margin-top: 105px;'>";
		}

    	echo $content;

		if(empty($noNavBar)){
			echo "</div>";
		}	

		?>

    	</div>

		<?php
		if(empty($noNavBar)){
		?>	
	    	<script>

				const nav_menu = document.querySelector("nav ul");
				
				document.querySelector('#burger_icon_btn').onclick = function()
				{	
					if(nav_menu.style.display=="block")
					{
						nav_menu.style.display="none";
					}
					else
					{
						nav_menu.style.display="block";
					} 
				};

			</script>
		<?php
		}
		if(!empty($useTiny_mce))
		{
		?>	
			<script src="tiny_mce/tiny_mce.js"></script>
			<script>
				tinyMCE.init({
					selector : "textarea", 
					forced_root_block : '',
        			force_br_newlines : true,
        			force_p_newlines : false,
				});
			</script>
		<?php 
		}
		?>
	</body>
</html>