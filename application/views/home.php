<!DOCTYPE html>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?=base_url()?>/assets/css/navstyle.css">
		<link rel="stylesheet" href="<?=base_url()?>/assets/css/homestyle.css">
		<link rel="shortcut icon" href="<?=base_url()?>/assets/images/Logo.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<title>Shelf | Home</title>
	</head>

	<body>
		<div class="container">
			<div class="searchModal">
				<div class="modalContent">
					<span id="searchModalClose">&times;</span>
					<h1>Search</h1>
					<form>
						<input type="search" placeholder="Title, Author, Publication Date">
					</form>
				</div>
			</div>

			<div class="banner">
		 	 	<img class="logo" src="<?=base_url()?>/assets/images/Banner.png" alt="Shelf">
		 	 	<h1>Bili kayo please parang awa niyo na</h1>
	 	 	</div>

			<div id="navId" class="topnav">
				<a href="#" class="NavLogo" title="Go back to top">
		 	 		<img id="LogoAtNav" src="<?=base_url()?>/assets/images/Logo.png">
		 		</a>
				<a href="#home" class="active">Home</a>
	 	 		<a href="#news">My Cart</a>
				<a href="#contact">My Shelf</a>
				<a href="#about">Recommended</a>
				<a href="javascript:void(0);" id="searchA">Book Search</a>
				<a href="javascript:void(0);" class="icon" onclick="displayTopNavResponsive()">&#9776;</a>	
			</div>

			<div class="text">
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.
				</p>
			</div>

			<div class="footer">
				<div class="footerContent">
					<p><span class="footerTitle">Shelf</span></p>
				</div>
			</div>	
		</div>

	<script>
		$(document).ready(function() {
		  	$('#LogoAtNav').css('display', 'none');
				$(window).scroll(function () {
				    console.log($(window).scrollTop());
				    if ($(window).scrollTop() > 58) {
				    	$('.topnav').addClass('navbar-fixed');
				    	$('#LogoAtNav').show();
				    }
					if ($(window).scrollTop() < 58) {
				    	$('.topnav').removeClass('navbar-fixed');
				    	$('#LogoAtNav').css('display', 'none');
				}
			});
		});
	</script>
	<script>
		function displayTopNavResponsive() {
  		  	var x = document.getElementById("navId");
		    if (x.className === "topnav" || x.className === "topnav navbar-fixed") {
		        x.className += " responsive";
		    }else if(x.className === "topnav responsive"){
		        x.className = "topnav";
		    }else if(x.className === "topnav navbar-fixed responsive"){
		    	x.className = "topnav navbar-fixed";
		    }
		}
	</script>

	<script>
		$('#searchA').click(function(){
			$('.searchModal').show();
		});
	</script>

	<script>
		$('#searchModalClose').click(function(){
			$('.searchModal').hide();
		});
	</script> 	

	</body>
</html>