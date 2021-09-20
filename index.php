<!doctype html>
<html lang="en">
  <head>
      <title>Kidz Day Care</title>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"> 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
 <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.3/css/boxicons.min.css">
 <link rel="stylesheet" href="css/style.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
 <script src="js/script.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<header>
 <div class="waveWrapper waveAnimation">
  <div class="waveWrapperInner bgTop">
    <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
  </div>
  <div class="waveWrapperInner bgMiddle">
    <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
  </div>
  <div class="waveWrapperInner bgBottom">
    <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
  </div>
</div>
        <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlay nav_bar"></div>
        <div class="container nav_bar">
            <nav>
                <h1 class="brand"><a href="index.html">K<span>I</span>DZ</a></h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
			<script>
				var open = document.getElementById('hamburger');
var changeIcon = true;

open.addEventListener("click", function(){

    var overlay = document.querySelector('.overlay');
    var nav = document.querySelector('nav');
    var icon = document.querySelector('.menu-toggle i');

    overlay.classList.toggle("menu-open");
    nav.classList.toggle("menu-open");

    if (changeIcon) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times");

        changeIcon = false;
    }
    else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
        changeIcon = true;
    }
});
			</script>
  

			<div class="svg-container">
				
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600">
				  	<defs>


					    <radialGradient id="gradBody" cx="300" cy="348.476" r="65.719" gradientTransform="matrix(1 0 0 1.034 0 -11.877)" gradientUnits="userSpaceOnUse">
						    <stop offset=".501" stop-color="#FFF"/>
						    <stop offset=".684" stop-color="#FCFCFC"/>
						    <stop offset=".815" stop-color="#F3F3F4"/>
						    <stop offset=".928" stop-color="#E3E5E6"/>
						    <stop offset="1" stop-color="#D5D7D9"/>
						</radialGradient>

						<radialGradient id="gradHead" cx="300.012" cy="258.826" r="91.565" gradientTransform="matrix(1 0 0 .716 0 73.539)" gradientUnits="userSpaceOnUse">
						    <stop offset=".702" stop-color="#FFF"/>
						    <stop offset=".811" stop-color="#FCFCFC"/>
						    <stop offset=".889" stop-color="#F3F3F4"/>
						    <stop offset=".957" stop-color="#E3E5E6"/>
						    <stop offset="1" stop-color="#D5D7D9"/>
						</radialGradient>
					</defs>
					<rect id="BG" fill="url(#gradBG)" width="600" height="600"/>

					<g id="panda">
					<path id="arm2" fill="#231F20" d="M312.685 361.92c12.25 45.717 34.26 43.597 60.247 36.634 25.986-6.963 46.108-16.133 33.858-61.85s-32.462-80.023-69.233-70.17c-36.77 9.853-37.122 49.67-24.872 95.386z"/>
					<path id="arm1" fill="#231F20" d="M287.34 361.92c-12.25 45.717-34.26 43.597-60.247 36.634s-46.108-16.133-33.858-61.85 32.462-80.023 69.233-70.17c36.77 9.853 37.122 49.67 24.872 95.386z"/>
					
					<path id="bodyBlack" fill="#231F20" d="M385.78 363.252c0 38.138-38.406 69.055-85.78 69.055s-85.78-30.917-85.78-69.055 38.406-108.28 85.78-108.28 85.78 70.142 85.78 108.28z"/>
					
					<path id="leg2" fill="#231F20" d="M348.62 367.74c2.277 0 29.148-11.386 66.493 2.277 6.83-6.376 18.217-8.198 16.85 4.554-1.365 12.753-6.83 50.554-21.404 55.564-14.575 5.01-89.72.91-99.285-7.742-9.565-8.653 37.345-54.652 37.345-54.652z"/>
					<path id="leg1" fill="#231F20" d="M251.38 367.74c-2.276 0-29.147-11.386-66.492 2.277-6.83-6.376-18.217-8.198-16.85 4.554 1.365 12.753 6.83 50.554 21.404 55.564s89.72.91 99.284-7.742c9.564-8.653-37.345-54.652-37.345-54.652z"/>

					<path id="bodyPanda" fill="url(#gradBody)" d="M369.05 363.93c0 30.7-30.915 55.587-69.05 55.587s-69.05-24.887-69.05-55.587 30.915-87.16 69.05-87.16 69.05 56.46 69.05 87.16z"/>
					<path id="belly" fill="#FFF" d="M356.957 348.665c0 25.323-25.5 45.852-56.957 45.852s-56.957-20.53-56.957-45.852 25.5-71.897 56.957-71.897 56.957 46.573 56.957 71.897z"/>

					
					<path id="ear2" fill="#231F20" d="M317.808 190.34c-4.9 16.237 4.68 32.876 21.395 37.163 16.717 4.288 34.24-5.4 39.138-21.633 4.9-16.235-4.68-32.874-21.395-37.16-16.718-4.29-34.24 5.397-39.137 21.63z"/>
					<path id="ear1" fill="#231F20" d="M282.196 190.34c4.9 16.237-4.68 32.876-21.395 37.163-16.716 4.288-34.238-5.4-39.137-21.633-4.898-16.235 4.68-32.874 21.396-37.16 16.717-4.29 34.238 5.397 39.136 21.63z"/>

					<path id="head2" fill="url(#gradHead)" d="M393.992 272.088c0 49.79-78.897 53.63-93.98 53.63s-93.98-3.84-93.98-53.63 36.024-90.154 93.98-90.154 93.98 40.364 93.98 90.154z"/>
					<path id="head1" fill="#FFF" d="M384.175 266.752c0 45.74-70.656 49.265-84.163 49.265-13.507 0-84.163-3.527-84.163-49.265s32.26-82.817 84.162-82.817 84.163 37.078 84.163 82.817z"/>
					
					<g id="face">
						<ellipse id="snout" fill="#D5D7D9" cx="300.012" cy="270.669" rx="29.233" ry="22.958"/>
						<path id="nose" fill="#231F20" d="M300.494 252.763c-6.2-.052-16.62 1.39-16.702 9.6-.062 7.205 11.83 12.46 16.505 12.46 4.676 0 16.64-4.82 16.712-12.15.082-8.21-10.317-9.848-16.516-9.91z"/>
						<path id="shine" fill="#FFF" d="M310.036 262.294c-4.212-3.51-14.914-3.787-19.28-.15-1.313-7.496 20.76-7.264 19.28.15z"/>
						
						<path id="mouth2" fill="#231F20" d="M312.323 282.46c6.008 0 10.986-4.902 11.868-11.3.093.665.14 1.344.14 2.036 0 7.364-5.376 13.334-12.007 13.334-6.632 0-12.007-5.97-12.007-13.334 0-.692-.06-1.372.032-2.035.883 6.4 5.967 11.3 11.975 11.3z"/>
						<path id="mouth1" fill="#231F20" d="M288.48 282.46c-6.008 0-10.986-4.902-11.868-11.3-.092.665-.14 1.344-.14 2.036 0 7.364 5.377 13.334 12.008 13.334s12.007-5.97 12.007-13.334c0-.692-.048-1.372-.14-2.035-.88 6.4-5.86 11.3-11.867 11.3z"/>
						
						<path id="black2" fill="#231F20" d="M343.256 223.487c-14.95-9.78-31.917-10.296-36.952-2.598-5.036 7.696 2.23 23.038 17.18 32.818 14.947 9.78 28.476 8.044 33.512.347 5.037-7.697 1.208-20.788-13.74-30.568z"/>
						<circle id="eye2" fill="#FFF" cx="317" cy="227.546" r="5.974"/>
						<circle id="pupil2" fill="#231F20" cx="315.69" cy="228.323" r="1.867"/>
						
						<path id="black1" fill="#231F20" d="M256.768 223.487c14.95-9.78 31.917-10.296 36.952-2.598 5.036 7.696-2.23 23.038-17.18 32.818-14.947 9.78-28.476 8.044-33.512.347-5.036-7.697-1.208-20.788 13.74-30.568z"/>
						<circle id="eye1" fill="#FFF" cx="283.025" cy="227.546" r="5.974"/>
						<circle id="pupil1" fill="#231F20" cx="284.334" cy="228.323" r="1.867"/>
					</g>
					</g>

				</svg>
			</div>
		<script>
		function JellyPanda() {
	var tlPanda = new TimelineLite({delay:.5});
		
		tlPanda
		
		// SET
		.set(".svg-container", { perspective: 200 })
		.set("#panda *, #btnP", {transformOrigin:"center center"})
		
		
		// JELLYPANDA MOTION
		.staggerTo("#panda *", 2, {scaleX:1.2, scaleY:.85, y:-18, rotationX: 15, rotationY: -15, rotationZ: 2, ease:Elastic.easeOut}, .015, 0.2)
		.staggerTo("#panda *", 2, {scaleX:1, scaleY:1, y:0, rotationY:0, rotationX: 0, rotationZ: 0, ease:Elastic.easeOut}, .015, 0.4)
	
		// FACE MOVING LEFT
		.to("#face", .6, {x:-20, rotationY:-20, ease:Expo.easeOut}, "b")
		.to("#head1", .6, {x:-14, rotationY:-20, ease:Expo.easeOut}, "b")
		.to("#head2", .6, {x:-6, rotationY:-15, ease:Expo.easeOut}, "b")
		.to("#ear1", .6, {y:5, rotationY:-20, ease:Expo.easeOut}, "b")
		.to("#ear2", .6, {y:5, rotationY:-20, ease:Expo.easeOut}, "b")
		
		// FACE MOVING RIGHT
		.to("#face", .6, {x:20, rotationY:20, ease:Expo.easeOut}, "c+=.1")
		.to("#head1", .6, {x:14, rotationY:25, ease:Expo.easeOut}, "c+=.1")
		.to("#head2", .6, {x:6, rotationY:15, ease:Expo.easeOut}, "c+=.1")
		.to("#ear1", .6, {y: 5, rotationY:20, ease:Expo.easeOut}, "c+=.1")
		.to("#ear2", .6, {y: 5, rotationY:20, ease:Expo.easeOut}, "c+=.1")
		
		// PANDA BACK POSITION

		.to("#panda *", 1.5, {x:0, y:0, rotationY:0}, "+=1")

		return tlPanda;
	}


var master = new TimelineMax({onComplete: onComplete});
tl = JellyPanda();
master.add(tl,0);

function onComplete() {
		tl.clear().add(JellyPanda());
		master.play(0);
	}

$(".BTNA")
	.on('mouseenter', function(){
	  
	    TweenMax.to("#btnP", .2, {scale:.9, stroke: "#FFF"},0)
	 })

	.on('mouseleave', function(){
	  	TweenMax.to("#btnP", .2, {scale:1, stroke: "#231F20"},0)
});

//
$(".BTNA").click(function(){
 	master.paused(!master.paused()); 
});
		</script>
		
		


	
</header>

<section>
	<div class="container three_card">
 <div class="row row_1">
    <div class="box">
      <div class="icon">
       01
      </div>
      <div class="content">
       Happy Baby
      </div>
    </div>
    <div class="box">
      <div class="icon">
        02
      </div>
      <div class="content">
        Nurturing
      </div>
    </div>
    <div class="box">
      <div class="icon">
        03
      </div>
      <div class="content">
        Babysitting
      </div>
    </div>
  </div>
</div>
</section>

<section>

</section>

<br>
<section class="c-section" id="services">
    <h2 class="c-section__title"><span>Our Services</span></h2>
    <ul class="c-services">
        <li class="c-services__item">
        <h3>Join the Network</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum odio velit, efficitur sed ultricies quis, porta ut metus. Maecenas blandit nec nunc congue bibendum. Nam non malesuada tellus, non vehicula nunc. Donec interdum efficitur mauris, non sollicitudin magna suscipit ut. Mauris varius elit mollis aliquam lobortis. Quisque semper tellus sed massa sodales pretium.</p>
        </li>
        <li class="c-services__item">
        <h3>Find a Babysitter</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum odio velit, efficitur sed ultricies quis, porta ut metus. Maecenas blandit nec nunc congue bibendum. Nam non malesuada tellus, non vehicula nunc. Donec interdum efficitur mauris, non sollicitudin magna suscipit ut. Mauris varius elit mollis aliquam lobortis. Quisque semper tellus sed massa sodales pretium.</p>
        </li>
        <li class="c-services__item">
        <h3>Happy Baby</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum odio velit, efficitur sed ultricies quis, porta ut metus. Maecenas blandit nec nunc congue bibendum. Nam non malesuada tellus, non vehicula nunc. Donec interdum efficitur mauris, non sollicitudin magna suscipit ut. Mauris varius elit mollis aliquam lobortis. Quisque semper tellus sed massa sodales pretium.</p>
        </li>
        <li class="c-services__item">
        <h3>Happy Parents</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum odio velit, efficitur sed ultricies quis, porta ut metus. Maecenas blandit nec nunc congue bibendum. Nam non malesuada tellus, non vehicula nunc. Donec interdum efficitur mauris, non sollicitudin magna suscipit ut. Mauris varius elit mollis aliquam lobortis. Quisque semper tellus sed massa sodales pretium.</p>
        </li>
        <li class="c-services__item">
        <h3>Babysitting</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum odio velit, efficitur sed ultricies quis, porta ut metus. Maecenas blandit nec nunc congue bibendum. Nam non malesuada tellus, non vehicula nunc. Donec interdum efficitur mauris, non sollicitudin magna suscipit ut. Mauris varius elit mollis aliquam lobortis. Quisque semper tellus sed massa sodales pretium.</p>
        </li>
        <li class="c-services__item">
        <h3>Baby Shower</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum odio velit, efficitur sed ultricies quis, porta ut metus. Maecenas blandit nec nunc congue bibendum. Nam non malesuada tellus, non vehicula nunc. Donec interdum efficitur mauris, non sollicitudin magna suscipit ut. Mauris varius elit mollis aliquam lobortis. Quisque semper tellus sed massa sodales pretium.</p>
        </li>
    </ul>
    </section>

<section class="banner-tab" id="about">
  <div class="container">
    <div class="row">
      <ul class="tabs">
        <li class="tab-link current" data-tab="tab-1">Our Mission</li>
        <li class="tab-link" data-tab="tab-2">Our Vision</li>
        <li class="tab-link" data-tab="tab-3">Our Values</li>
      </ul>

      <div id="tab-1" class="tab-content current">
        <div class="row">
          <div class="col-md-3">
            <img src="image/landing-bottom-vector-img-1.png" class="img-fluid" />
          </div>
          <div class="col-md-3">
            <h5>Our Mission</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum odio velit, efficitur sed ultricies quis, porta ut metus. Maecenas blandit nec nunc congue bibendum.</p>
          </div>
          <div class="col-md-3">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum odio velit, efficitur sed ultricies quis, porta ut metus. Maecenas blandit nec nunc congue bibendum. 
            </p>
          </div>
          <div class="col-md-3">
            <img src="image/features.png" class="img-fluid" />
          </div>
        </div>
      </div>
      <div id="tab-2" class="tab-content">
        <div class="row">
          <div class="col-md-3">
            <img src="image/landing-bottom-vector-img-2.png" class="img-fluid" />
          </div>

          <div class="col-md-3">
            <h5>Our Vision</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum odio velit, efficitur sed ultricies quis, porta ut metus. Maecenas blandit nec nunc congue bibendum.</p>
          </div>

          <div class="col-md-3">
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum odio velit, efficitur sed ultricies quis, porta ut metus. Maecenas blandit nec nunc congue bibendum.</p>
          </div>

          <div class="col-md-3">
            <img src="image/landing-holder-img.jpg" class="img-fluid" />
          </div>
        </div>
      </div>
      <div id="tab-3" class="tab-content">
        <div class="row">
          <div class="col-md-3">
            <img src="image/second-img-1.png" class="img-fluid" />
          </div>

          <div class="col-md-3">
            <h5>Our Values</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum odio velit, efficitur sed ultricies quis, porta ut metus. Maecenas blandit nec nunc congue bibendum.</p>
          </div>

          <div class="col-md-3">
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum odio velit, efficitur sed ultricies quis, porta ut metus. Maecenas blandit nec nunc congue bibendum.</p>
          </div>

          <div class="col-md-3">
            <img src="image/second-img-2.png" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
  $(document).ready(function () {
  $(".banner-tab ul.tabs li").click(function () {
    var tab_id = $(this).attr("data-tab");

    $(".banner-tab ul.tabs li").removeClass("current");
    $(".banner-tab .tab-content").removeClass("current");

    $(this).addClass("current");
    $("#" + tab_id).addClass("current");
  });
});

  </script>
  <!-- container -->
</section>


<footer class="new_footer_area bg_color" id="contact">
            <div class="new_footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum odio velit,</p>
                                <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                                    <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                                    <button class="btn btn_get btn_get_two" type="submit">Subscribe</button>
                                    <p class="mchimp-errmessage" style="display: none;"></p>
                                    <p class="mchimp-sucmessage" style="display: none;"></p>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Heading 1</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">Sample 1</a></li>
                                    <li><a href="#">Sample 2</a></li>
                                    <li><a href="#">Sample 3</a></li>
                                    <li><a href="#">Sample 4</a></li>
                                    <li><a href="#">Sample 5</a></li>
                                    <li><a href="#">Sample 6</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                               <h3 class="f-title f_600 t_color f_size_18">Heading 1</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">Sample 1</a></li>
                                    <li><a href="#">Sample 2</a></li>
                                    <li><a href="#">Sample 3</a></li>
                                    <li><a href="#">Sample 4</a></li>
                                    <li><a href="#">Sample 5</a></li>
                                    <li><a href="#">Sample 6</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Kidz Day Care</h3>
                                <div class="f_social_icon">
                                    <a href="#" class="fab fa-facebook"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-linkedin"></a>
                                    <a href="#" class="fab fa-pinterest"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bg">
                    <div class="footer_bg_one"></div>
                    <div class="footer_bg_two"></div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-7">
                            <p class="mb-0 f_400">© Zoho Corp 2021 All rights reserved.</p>
                        </div>
                        <div class="col-lg-6 col-sm-5 text-right">
                            <p>Made with <i class="icon_heart"></i> in <a href="#">Zoho Corp</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

</body>
</html>