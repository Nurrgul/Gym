<!DOCTYPE html>
<html>
<head>
	<title>Gym Website Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="animate.css">
	<link rel="stylesheet" type="text/css" href="style.css">
   </head>
<body>
<?php
	if($_COOKIE['user'] == ''):
?>
 <div class="login__wrapper hide">
    <form action="reg.php" method="post" class="registration__form hide">
        <h1>Registration</h1>
        <button class="close__reg_btn">x</button>
        <input id="RegName" type="text" name="name" placeholder="Your name">
        <input id="RegEmail" type="text" name="email" placeholder="Your email">
        <input id="RegPassword" type="password" name="password" placeholder="Your password">
        <button class="sign__up__btn">Sign up</button>

    </form>
    <form action="auth.php" method="post" class="authorization__form hide">
        <h1>Authorization</h1>
        <button class="close__auth__btn">x</button>
        <input id="loginEmail" type="text" name="email" placeholder="Your email">
        <input id="loginPassword" type="password" name="password" placeholder="Your password">
        <button class="sign__in__btn">Sign in</button>
    </form>
</div>


 <header>
 	 <div class="container">
 	 	<div class="logo">
 	 		 <a href="">Fitness <span>Club</span></a>
 	 	</div>
 	 	<a href="javascript:void(0)" class="ham-burger">
 	       <span></span>
 	       <span></span>
 	 	</a>

 	 	<div class="nav">
 	 		<ul>
 	 			<li><a href="#home">Home</a></li>
 	 			<li><a href="#about">About</a></li>
 	 			<li><a href="#service">Services</a></li>
 	 			<li><a href="#classes">Classes</a></li>
 	 			<li><a href="#schedule">Schedule</a></li>
 	 			<li><a href="#price">Price</a></li>
 	 			<li><a href="#contact">Contact</a></li>
 	 		</ul>
 	 	</div>
 	 </div>
   <!--        <a class="header__about__us" id="top" href="#">О нас</a>
                <a class="header__about__news" href="#">Новости и мероприятия</a>
                <a class="header__about__delivery" id="buy" href="Buybook.html">Доставка и оплата</a>
                <a class="header__about__delivery" href="adminPanel.html">Админ панель</a>-->
   <div class="header__profile">
      <a class="header__profile__register" href="#">Register</a>
      <a class="header__profile__login" href="#">Login</a>
    </div>
 </header>
 <!-- End Header  -->

  <!-- Start Home -->
  <section class="home wow flash" id="home">
  	 <div class="container">
  	 	  <h1 class="wow slideInLeft" data-wow-delay="1s">It's <span>gym</span> time. Let's go</h1>
  	 	  <h1 class="wow slideInRight" data-wow-delay="1s">We are ready to <span>fit you</span></h1>
  	 </div>
  	  <!-- go down -->
  	      <a href="#about" class="go-down">
  	      	  <i class="fa fa-angle-down" aria-hidden="true"></i>
  	      </a>
  	  <!-- go down -->

  </section>
  <!-- End Home -->


 <!-- Start About -->
  <section class="about" id="about">
  	  <div class="container">
  	  	  <div class="content">
  	  	  	   <div class="box wow bounceInUp">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="img/about1.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Free Consultation</h4>
                       	   <p>
														 You can leave a request on our website in order to get advice from our best specialists.
You won't regret it!
													 </p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	   	<div class="box wow bounceInUp" data-wow-delay="0.2s">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="img/about2.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Best Training</h4>
                       	   <p>
														 The best and most effective workouts that will be selected just for you.
You will definitely achieve the best results and the figure of your dreams if you are with us.
													 </p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	   <div class="box wow bounceInUp" data-wow-delay="0.4s">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="img/about3.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Build Perfect Body</h4>
                       	   <p>
														 Create the body of your dreams with us.
We promise you that looking in the mirror, each time you will love yourself even more, you will not be afraid to put on a swimsuit.
After all, your figure will be the best.
													 </p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  </div>
  	  </div>
  </section>
 <!-- End About -->
<!-- Start Today -->
 <section class="start-today">
 	<div class="container">
 		 <div class="content">
 		 	  <div class="box text wow slideInLeft">
 		 	  	 <h2>Start Your Training Today</h2>
 		 	  	 <p>Don't put off until tomorrow what you can start doing today.
Right now, you can take a simple but big step towards your dream body.</p>
 		 	  	 <a href="#price" class="btn">Start Now</a>
 		 	  </div>
 		 	  <div class="box img wow slideInRight">
 		 	  	 <img src="img/gallery4.jpg" alt="start today" />
 		 	  </div>

 		 </div>
 	</div>
 </section>
<!-- End Start Today -->



<!-- Start Gallery -->
  <section class="gallery" id="gallery">
  	 <h2>Results of our users </h2>
  	<div class="content">
  		 <div class="box wow slideInLeft">
  		 	 <img class="result "src="img/res1.jpg" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInRight">
  		 	 <img class="result" src="img/res3.jpg" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInLeft">
  		 	 <img class="result" src="img/res2.jpg" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInRight">
  		 	 <img class="result" src="img/res4.jpg" alt="gallery" />
  		 </div>
  	</div>
  </section>
<!-- End Gallery -->

 <!-- Start Price -->
  <section class="price-package" id="price">
  	 <div class="container">
  	 	  <h2>Choose Your Package</h2>
  	 	  <div class="content">
  	 	  	  <div class="box wow bounceInUp">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
  	 	  	  	  	   	  10 000/Month
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="img/price1.jpg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Workouts for weight loss</h3>
  	 	  	  	  	   	  <p>Menu for weight loss</p>
  	 	  	  	  	   	  <p>Effective strength training</p>
  	 	  	  	  	   	  <p>Cardio workout</p>
  	 	  	  	  	   	  <p>Detailed video instruction</p>
  	 	  	  	  	   	  <p>Communication with specialists</p>
  	 	  	  	  	   	  <a href="" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  	  <div class="box wow bounceInUp" data-wow-delay="0.2s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
  	 	  	  	  	   	  10 000/Month
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="img/price3.jpg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Relief Workouts</h3>
  	 	  	  	  	   	  <p>Menu for maintaining weight</p>
  	 	  	  	  	   	  <p>Effective strength training</p>
  	 	  	  	  	   	  <p>Cardio workout</p>
  	 	  	  	  	   	  <p>Detailed video instruction</p>
  	 	  	  	  	   	  <p>Communication with specialists</p>
  	 	  	  	  	   	  <a href="" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  	  <div class="box wow bounceInUp" data-wow-delay="0.4s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
  	 	  	  	  	   	  10 000/Month
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="img/price2.jpg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Workouts for gaining muscle mass</h3>
  	 	  	  	  	   	  <p>Menu for weight gain</p>
  	 	  	  	  	   	  <p>Effective strength training</p>
  	 	  	  	  	   	  <p>Cardio workout</p>
  	 	  	  	  	   	  <p>etailed video instruction</p>
  	 	  	  	  	   	  <p>Communication with specialists</p>
  	 	  	  	  	   	  <a href="" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  </div>
  	 </div>
  </section>
 <!-- End Price -->

 <!-- Start Contact -->
 <section class="contact" id="contact">
		<div class="container">
			 <div class="content">
					 <div class="box form wow slideInLeft">
							<form action="cons.php" method="post">
								 <input type="text" name="name" placeholder="Enter Name">
								 <input type="text" name="email" placeholder="Enter Email">
								 <input type="text" name="mobile" placeholder="Enter Mobile">
								 <textarea name="message" placeholder="Enter Message"></textarea>
								 <button type="submit">Send Message</button>
							</form>
					 </div>
					 <div class="box text wow slideInRight">
								<h2>Free Consultation</h2>
								 <p class="title-p">Start right now</p>
								 <div class="info">
										 <ul>
												 <li><span class="fa fa-map-marker"></span> Almaty</li>
												 <li><span class="fa fa-phone"></span> +7 778 591 15 66<br/>+7 708 312 17 70</li>
												 <li><span class="fa fa-envelope"></span> 28680@iitu.edu.kz</li>
										 </ul>
								 </div>
								 <div class="social">
											<a href=""><span class="fa fa-facebook"></span></a>
											<a href="https://instagram.com/iitu_kz?igshid=YmMyMTA2M2Y="><span class="fa fa-instagram"></span></a>
											<a href=""><span class="fa fa-skype"></span></a>
											<a href=""><span class="fa fa-youtube-play"></span></a>
								 </div>

								 <div class="copy">
										 PowerBy Zhanna&Nurgul
								 </div>
					 </div>
			 </div>
		</div>
 </section>
 <!-- End Contact -->
<?php else: ?>

	<header>
  	 <div class="container">
  	 	<div class="logo">
  	 		 <a href="">Fitness <span>Club</span></a>
  	 	</div>
			<div class="admin">
				<p> Hello <?=$_COOKIE['user']?> For exit click <a class="link__exit" href="/exit.php">
			here.</a></p>
		</div>
  	 	<a href="javascript:void(0)" class="ham-burger">
  	       <span></span>
  	       <span></span>
  	 	</a>

  	 	<div class="nav">
  	 		<ul>
  	 			<li><a href="#home">Home</a></li>
  	 			<li><a href="#about">Training</a></li>
  	 			<li><a href="#service">Schedule</a></li>
  	 			<li><a href="#contact">Contact</a></li>
  	 		</ul>
  	 	</div>
		</div>
<div>
<div>
</header>
	<!-- Start Schedule -->
	  <section class="schedule" id="schedule">
	  	 <div class="container">
	  	 	  <div class="content">
	  	 	  	   <div class="box text wow slideInLeft">
	  	 	  	   	   <h2>Schedule</h2>
	  	 	  	   	   <p>
	  	 	  	   	   	Start your day right!
	  	 	  	   	   </p>
	  	 	  	   	   <img src="img/run.jpg" alt="schedule" />
	  	 	  	   </div>
	  	 	  	   <div class="box timing wow slideInRight">
	                   <table class="table">
	                   	 <tbody>
	                   	 	<tr>
	                   	 		<td class="day">Morning/get up</td>
	                   	 		<td><strong>8:00 AM</strong><br/>Glass of water</td>
	                   	 		<td>Jog<br/> 8:30 to 9:30 AM</td>
	                   	 	</tr>
	                   	 	<tr>
	                   	 		<td class="day"></td>
	                   	 		<td><strong>10:00 AM</strong></td>
	                   	 		<td>Breakfast<br/> 10:00 to 11:00 AM</td>
	                   		</tr>
	                   	 	<tr>
	                   	 		<td class="day">Workout</td>
	                   	 		<td><strong>Glass of water</strong></td>
	                   	 		<td>Training<br/> 12:00 to 13:00 AM</td>

	                   	 	</tr>
	                   	 	<tr>
	                   	 		<td class="day">Afternoon</td>
	                   	 		<td><strong>14:00</strong></td>
	                   	 		<td>Lunch<br/> 14:00 to 15:00 AM</td>

	                   	 	</tr>
	                   	 	<tr>
	                   	 		<td class="day"></td>
	                   	 		<td><strong>17:00<br/>Bottle of water</strong></td>
	                   	 		<td>An evening walk<br/> 17:00 to 18:00 AM</td>

	                   	 	</tr>
	                   	 	<tr>
	                   	 		<td class="day">Evening</td>
	                   	 		<td><strong>18:30 AM</strong></td>
	                   	 		<td>Dinner<br/> 18:30 to 19:30 AM</td>

	                   	 	</tr>
	                   	 </tbody>
	                   </table>
	  	 	  	   </div>
	  	 	  </div>
	  	 </div>
	  </section>
	<!-- End Schedule -->
	<h1 class="workout">Video workout</h1>
<div class="video">
	<div>
		<a href="https://youtu.be/IbA1zVI31jU"><img src="img/video1.png" class="video1" /></a>
	</div>
	<div>
		<a href="https://youtu.be/kcswbxqOERQ"><img src="img/video2.png" class="video2"> /></a>
	</div>
	<div >
		<a href="https://youtu.be/QumpvdYweDQ"><img src="img/video3.png" class="video3" /></a>
	</div>
	<div class="video4">
		<a href="https://youtu.be/GhOMmCpGgwg"><img src="img/video4.png" class="video4" /></a>
	</div>
	<div>
		<a href="https://youtu.be/UrmfjGBX84Y"><img src="img/video5.png" class="video5" /></a>
	</div>
	<div>
		<a href="https://youtu.be/LbOl-Z5mVcQ"><img src="img/video6.png" class="video6" /></a>
	</div>
</div>
		<section class="contact" id="contact">
			 <div class="container">
					<div class="content">
							<div class="box form wow slideInLeft">
								 <form action="cons.php" method="post">
										<input type="text" name="name" placeholder="Enter Name">
										<input type="text" name="email" placeholder="Enter Email">
										<input type="text" name="mobile" placeholder="Enter Mobile">
										<textarea name="message" placeholder="Enter Message"></textarea>
										<button type="submit">Send Message</button>
								 </form>
							</div>
							<div class="box text wow slideInRight">
									 <h2>Free Consultation</h2>
										<p class="title-p">Start right now</p>
										<div class="info">
												<ul>
														<li><span class="fa fa-map-marker"></span> Almaty</li>
														<li><span class="fa fa-phone"></span> +7 778 591 15 66<br/>+7 708 312 17 70</li>
														<li><span class="fa fa-envelope"></span> 28680@iitu.edu.kz</li>
												</ul>
										</div>
										<div class="social">
												 <a href=""><span class="fa fa-facebook"></span></a>
												 <a href="https://instagram.com/iitu_kz?igshid=YmMyMTA2M2Y="><span class="fa fa-instagram"></span></a>
												 <a href=""><span class="fa fa-skype"></span></a>
												 <a href=""><span class="fa fa-youtube-play"></span></a>
										</div>

										<div class="copy">
												PowerBy Zhanna&Nurgul
										</div>
							</div>
					</div>
			 </div>
		</section>

<?php endif;?>


 <!-- jquery -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){

      $(".ham-burger, .nav ul li a").click(function(){

        $(".nav").toggleClass("open")

        $(".ham-burger").toggleClass("active");
      })
      $(".accordian-container").click(function(){
      	$(".accordian-container").children(".body").slideUp();
      	$(".accordian-container").removeClass("active")
      	$(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
      	$(this).children(".body").slideDown();
      	$(this).addClass("active")
      	$(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
      })

       $(".nav ul li a, .go-down").click(function(event){
         if(this.hash !== ""){

              event.preventDefault();

              var hash=this.hash;

              $('html,body').animate({
                scrollTop:$(hash).offset().top
              },800 , function(){
                 window.location.hash=hash;
              });

              // add active class in navigation
              $(".nav ul li a").removeClass("active")
              $(this).addClass("active")
         }
      })
})

</script>

<script src="wow.min.js"></script>
<script src="login.js"></script>
<script src="Final.js"></script>
<script src="https://kit.fontawesome.com/51c82fa37e.js" crossorigin="anonymous"></script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       0,
      }
    );
    wow.init();
  </script>

</body>
</html>
