<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAMINUZA YI H.T.W</title>
	<link rel="stylesheet" type="text/css" href="CSS/all.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/neweducss.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
	
</head>
<body>
	<header class="header">
		<a href="#" class="logo"> <i class="fas fa-lightbulb"></i>MINUZA H.T.W</a>
		<nav class="navbar" id="navbar">
			<div id="close-navbar" class="fas fa-times active" onclick="hidemenu()"></div>
			<a href="#">Murakaza neza</a>
			<a href="#">ku ngingo ya</a>
			<a href="#">Ivyigwa</a>
			<a href="#">kuvugana</a>
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
				<h3>Amasomo meza uzabona hano</h3>
				<p>Ni ngombwa cyane kwita ku murwayi, kandi umurwayi azakurikizwa, ariko iki nicyo gihe</p>
				<a href="#" class="btn">Gutangura</a>
			</div>
		</section>
		<section class="swiper-slide slide" style="background: url(Images/teach.jpg) no-repeat;">
			<div class="content">
				<h3>Amasomo meza uzabona hano</h3>
				<p>Ni ngombwa cyane kwita ku murwayi, kandi umurwayi azakurikizwa, ariko iki nicyo gihe</p>
				<a href="#" class="btn">Gutangura</a>
			</div>
		</section>
		<section class="swiper-slide slide" style="background: url(Images/book.jpg) no-repeat;">
			<div class="content">
				<h3>Amasomo meza uzabona hano</h3> 
				<p>Ni ngombwa cyane kwita ku murwayi, kandi umurwayi azakurikizwa, ariko iki nicyo gihe</p>
				<a href="#" class="btn">Gutangura</a>
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
	    	<h3><i class="fas fa-lightbulb" class="link">KAMINUZA YI H.T.W</i></h3>
	    	<p>Ni ngombwa cyane kwita ku murwayi, kandi umurwayi azakurikizwa, ariko iki nicyo gihe</p>
	    	<div class="share">
	    		<a href="#" class="fab fa-facebook-f"></a>
	    		<a href="#" class="fab fa-twitter"></a>
	    		<a href="#" class="fab fa-instagram"></a>
	    		<a href="#" class="fab fa-linkedin"></a>
	    	</div>
	     </div>
		  <div class="box">
		  	  <h3>amahuza yihuse</h3>
       		  <a href="#"  class="link">Murakaza neza</a>
			<a href="#"  class="link">ku ngingo ya</a>
			<a href="#"  class="link">Ivyigwa</a>
			<a href="#"  class="link">kuvugana</a>
              </div>
   	    <div class="box">
   	    	<h3>Imikoreshereze</h3>
   	    	<a href="#" class="link">ubufasha</a>
   	    	<a href="#" class="link">baza ibibazo</a>
   	    	<a href="#" class="link">ohereza ibitekerezo</a>
   	    	<a href="#" class="link">politiki bwite</a>
   	    	<a href="#" class="link">amajambo yo gukoresha</a>
   	    </div>	
        <div class="box">
        	<h3>akanyamakuru</h3>
        	<p>kwiyandikisha kubigezweho</p>
            <form action="">
            	<input type="email" name="" placeholder="Injiza meyilu yawe" id="" class="email">
            	<input type="submit" name="" value="Emeza" class="btn">
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