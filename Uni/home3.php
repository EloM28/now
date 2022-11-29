<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Université de H.T.W </title>
	<link rel="stylesheet" type="text/css" href="CSS/all.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/neweducss.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
	
</head>
<body>
	<header class="header">
		<a href="#" class="logo"> <i class="fas fa-lightbulb"></i>Université H.T.W</a>
		<nav class="navbar" id="navbar">
			<div id="close-navbar" class="fas fa-times active" onclick="hidemenu()"></div>
			<a href="#">Accueil</a>
			<a href="#">A propos</a>
			<a href="#">cours</a>
			<a href="#">contact</a>
		</nav>
       <div class="icons">
       	<div id="menu-btn" class="fa fa-bars" onclick="showmenu()"></div>
       </div>
	</header>
<!--begin of content-->
<section class="home">
	<div class="swiper home-slider">
		<div class="swiper-wrapper">
        <section class="swiper-slide slide" style="background: url(Images/inforoom.jpg) no-repeat;">
			<div class="content">
			<h3>Les meilleures leçons que vous trouverez ici</h3>
				<p>Il est très important de prendre soin du patient, et le patient sera suivi, mais c'est le moment</p>
				<a href="#" class="btn">Commencer</a>
			</div>
		</section>
		<section class="swiper-slide slide" style="background: url(Images/teach.jpg) no-repeat;">
			<div class="content">
				<h3>Les meilleures leçons que vous trouverez ici</h3>
				<p>Il est très important de prendre soin du patient, et le patient sera suivi, mais c'est le moment</p>
				<a href="#" class="btn">Commencer</a>
			</div>
		</section>
		<section class="swiper-slide slide" style="background: url(Images/book.jpg) no-repeat;">
			<div class="content">
				<h3>Les meilleures leçons que vous trouverez ici</h3> 
				<p>Il est très important de prendre soin du patient, et le patient sera suivi, mais c'est le moment</p>
				<a href="#" class="btn">Commencer</a>
			</div>
		</section>
		
		</div>
		<div class="swiper-pagination"></div>
	</div>




</section>
<!--end of content-->
<section class="footer">
	<div class="box-container">
	    <div class="box">
	    	<h3><i class="fas fa-lightbulb" class="link">Université de H.T.W</i></h3>
			<p>Il est très important de prendre soin du patient, et le patient sera suivi, mais c'est le moment</p>
	    	<div class="share">
	    		<a href="#" class="fab fa-facebook-f"></a>
	    		<a href="#" class="fab fa-twitter"></a>
	    		<a href="#" class="fab fa-instagram"></a>
	    		<a href="#" class="fab fa-linkedin"></a>
	    	</div>
	     </div>
		 <div class="box">
		  	  <h3>liens</h3>
				<a href="home.html">Accueil</a>
			<a href="home.html">A propos</a>
			<a href="home.html">cours</a>
			<a href="home.html">contact</a>
              </div>
   	    <div class="box">
   	    	<h3>liens utiles</h3>
   	    	<a href="#" class="link">centre d'aide</a>
   	    	<a href="#" class="link">poser des questions</a>
   	    	<a href="#" class="link">envoyer des commentaires</a>
   	    	<a href="#" class="link">politique privée</a>
   	    	<a href="#" class="link">conditions d'utilisation</a>
   	    </div>	
        <div class="box">
        	<h3>bulletin</h3>
        	<p>abonnez-vous pour les dernières mises à jour</p>
            <form action="">
            	<input type="email" name="" placeholder="entre ton email" id="" class="email">
            	<input type="submit" name="" value="envoyer" class="btn">
            </form>
        </div>
	</div>
	<div class="credit"><span>copyright&copy;2022 All right reserved</span></div>
</section>

<!--<script src="https://code.jquery.com/jquery-3.6.0.js"></script>-->
<script>
/*	let navbar = document.querySelector('.header.navbar')
document.querySelector('#menu-btn').onclick = () =>{
	navbar.classList.add('active');
}
document.querySelector('#close-navbar').onclick = () =>{
	navbar.classList.remove('active');
}*/
var navbar = document.getElementById('navbar');
 	function showmenu() 
 	{
 		navbar.style.right="0";
 	}
 	function hidemenu() 
 	{
 		navbar.style.right="-105%";
 	}
 	let accountform = document.querySelector('.account-form')
document.querySelector('#account-btn').onclick = () =>{
	accountform.classList.add('active');
}
document.querySelector('#close-form').onclick = () =>{
	accountform.classList.remove('active');
}

     let registerbtn = document.querySelector('.account-form .register-btn');
     let loginbtn = document.querySelector('.account-form .login-btn');
     
     registerbtn.onclick = () =>
     {
	   registerbtn.classList.add('active');
	   loginbtn.classList.remove('active');	  
	   document.querySelector('.account-form .login-form').classList.remove('active');
	   document.querySelector('.account-form .register-form').classList.add('active');
     };
     loginbtn.onclick = () =>
     {
	   registerbtn.classList.remove('active');
	   loginbtn.classList.add('active');	  
	   document.querySelector('.account-form .login-form').classList.add('active');
	   document.querySelector('.account-form .register-form').classList.remove('active');
     };
  
 		
      buttons=document.querySelector('.buttons').querySelectorAll('span');
      console.log(buttons);

	  /* Swipe image*/
	/*  var swiper = new Swiper(".home-slider", {
        pagination: {
          el: ".swiper-pagination",
		  clickable:true,
        },
		loop:true,
		grabCursor:true,
      });*/
	</script>	 

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
	/*var swiper = new Swiper(".mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });*/
	  var swiper = new Swiper(".home-slider", {
        pagination: {
          el: ".swiper-pagination",
		  clickable:true,
        },
		loop:true,
		grabCursor:true,
	});
</script>

</body>
</html>