<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>H.T.W University</title>
	<link rel="stylesheet" type="text/css" href="CSS/all.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/neweducss.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header class="header">
		<a href="#" class="logo"> <i class="fas fa-lightbulb"></i> H.T.W UNI</a>
		<div class="menubar">
            <ul>
                <li>
                    <a href="">Language</a>
                    <div class="submenu">
                        <ul>
                        <li><a href="neweduhome1.php">KIRUNDI</a></li>
                        <li><a href="neweduhome2.php">SWAHILI</a></li>
                        <li><a href="neweduhome3.php">FRANCAIS</a></li>
                    </ul>
                    </div>
                </li>
            </ul>
        </div>
       <div class="icons">
       	<div id="account-btn" class="fa fa-user"></div>
       </div>
	</header>
	<div class="account-form">
	 	<div id="close-form" class="fas fa-times " ></div>
	 	<div class="buttons">
	 		<span class="btn active login-btn">login</span>
	 		<span class="btn  register-btn">register</span>
	 	</div>
	 	<form class="login-form active" method="post" action="">
	 		<h3>login</h3>
	 		<input type="email" name="mail" placeholder="enter your email" class="box" required>
	 		<input type="password" name="password" placeholder="enter your password" class="box" required>
	        <div class="flex">
	        	<input type="checkbox" name="" id="remember-me">
	        	<label for="remember-me">remember me</label>
	        	<a href="#">forgot password</a>
	        </div> 	
	        <input type="submit" name="log" value="login now" class="btn">
	 	</form>
         <?php
		 include("authentificate.php");
		 echo authenti();
		 ?>
	 	<form class="register-form" action="" method="post">
	 		<h3>Register</h3>
			<input type="text" name="nom" placeholder="enter your lastname" class="box" required>
			 <input type="text" name="prenom" placeholder="enter your firstname" class="box"required>
	 		<input type="email" name="mail" placeholder="enter your email" class="box" required>
 	 		<input type="password" name="password" placeholder="enter your password" class="box"required>
			<input type="submit" name="register" value="register now" class="btnreg">
	 	</form>
		 </div>
		 
		<?php
		include("insertedu.php");
		echo insertedu();
		?>
	
<!--begin of content-->
<section class="home">
	<div class="swiper home-slider">
		<div class="swiper-wrapper">
        <section class="swiper-slide slide" style="background: url(Images/inforoom.jpg) no-repeat;">
			<div class="content">
				<h3>The best courses you will get here</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor</p>
				<a href="#" class="btn">Get Started</a>
			</div>
		</section>
		<section class="swiper-slide slide" style="background: url(Images/teach.jpg) no-repeat;">
			<div class="content">
				<h3>The best courses you will get  here</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor</p>
				<a href="#" class="btn">Get Started</a>
			</div>
		</section>
		<section class="swiper-slide slide" style="background: url(Images/book.jpg) no-repeat;">
			<div class="content">
				<h3>The best courses you will get here</h3> 
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor</p>
				<a href="#" class="btn">Get Started</a>
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
	    	<h3><i class="fas fa-lightbulb" class="link">H.T.W University</i></h3>
	    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor</p>
	    	<div class="share">
	    		<a href="#" class="fab fa-facebook-f"></a>
	    		<a href="#" class="fab fa-twitter"></a>
	    		<a href="#" class="fab fa-instagram"></a>
	    		<a href="#" class="fab fa-linkedin"></a>
	    	</div>
	     </div>
		  
   	    <div class="box">
   	    	<h3>userful links</h3>
   	    	<a href="#" class="link">help center</a>
   	    	<a href="#" class="link">ask questions</a>
   	    	<a href="#" class="link">send feedback</a>
   	    	<a href="#" class="link">private policy</a>
   	    	<a href="#" class="link">terms of use</a>
   	    </div>	
        <div class="box">
        	<h3>newsletter</h3>
        	<p>subscribe for latest updates</p>
            <form action="">
            	<input type="email" name="" placeholder="enter your email" id="" class="email">
            	<input type="submit" name="" value="submit" class="btn">
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