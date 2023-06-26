<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emmanuel Lubaini | Full Stack Web Developer</title>
    <link rel="icon" type="image/x-icon" href="assets/img/company.png">
    <link rel="stylesheet" href="assets/font/bootstrap-icons.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/styles/all.min.css">
    <link rel="stylesheet" href="owl/dist/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="owl/dist/assets/owl.theme.default.min.css">
   <link rel="stylesheet" href="assets/styles/main.css">
</head>
<body>
    
<!-- pre loader  -->
 <div id="preloader"></div>
 <nav class="navbar">
    <div class="max-width">
        <div class="logo"><a href="#"><i class="theme-text bi bi-fire"></i> Emmanuel<span>Lubaini.</span></a></div>
        <ul class="menu">
            <li><a href="<?php echo URL('index');?>" class="menu-btn">
                <i class="bi bi-house"></i> Home</a></li>
            <li><a href="<?php echo URL('index');?>#about" class="menu-btn">
                <i class="bi bi-info-square"></i> About</a></li>
            <li><a href="<?php echo URL('skills');?>" class="menu-btn">
                <i class="bi bi-person-bounding-box"></i> Skills</a></li>
                <li><a href="<?php echo URL('portfolio');?>" class="menu-btn">
                <i class="bi bi-folder"></i> Projects</a></li>
            <li><a href="<?php echo URL('contact');?>" class="menu-btn">
                <i class="bi bi-telephone"></i> Contact</a></li>
        </ul>
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</nav>
 
    <!-- home section start -->
    <section class="intro-section">
        <div class="max-width">
            <div class="intro-content">
                <div class="ucwords">
                    <h2 class="intro"><span class="lighter">Hi, My Name Is</span> <span class="theme-text">Emmanuel</span> Lubaini <i class="yellow bi bi-emoji-sunglasses-fill"></i>.<br></h2>
                    I am a <span class="auto-type"></span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- project section start -->
    <section class="projects" id="projects">
        <div class="max-width">
            <h2 class="title">My Projects</h2>
            <div class="carousel owl-carousel">
                <?php
                    foreach ($data as $value) {?>
                    <div class="card">
                        <div class="box">
                            <img src="assets/img/<?php echo $value->img;?>" alt="img">
                            <div class="text"><?php echo $value->name;?></div>
                            <p class="theme-text"><?php echo $value->description;?></p>
                            <a href="javascript:void(0);" class="project">View Project</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>


    <!-- footer section start -->
  
    <footer>
        <ul id="media">
            <!-- facebook  -->
            <li style="--clr:#0011ff;">
                <a href="#"><i class="fa-brands bi bi-facebook"></i>
                </a>
            </li>
    <!-- Twitter  -->
             <li style="--clr:#4506f0;">
                <a href="#"><i class="fa-brands bi bi-twitter"></i></a>
            </li>
            <!-- Instagram  -->
            <li style="--clr:#e73f0c;">
                <a href="#"><i class="fa-brands bi-instagram"></i></a>
            </li>
            <!-- whatsapp  -->
            <li style="--clr:#04c214;">
                <a href="#"><i class="fa-brands bi bi-whatsapp"></i></a>
            </li>
        </ul>
       
        <p>&copy; 2023 <a class="theme-text" href="#">Emmanuel Lubaini</a> | All Rights Reserved |</p>
    </footer>
    <script src="jquery.min.js"></script>
    <script src="owl/dist/owl.carousel.min.js"></script>
    <script src="node_modules/typed.js/dist/typed.umd.js"></script>
    <script src="assets/js/main.js"></script>
    <scrip src="script.js"></script>
    <!-- scroll bar js  -->
    <script type="text/javascript">
        var preogressbar = document .getElementById("preogressbar")
        var percent = document .getElementById("percent")
       
        var totalHeight = document .body.scrollHeight - window.innerHeight;
        window.onscroll = function(){
            var progress =( window.pageYOffset / totalHeight) * 100;
            preogressbar.style.height = progress + "%";
            percent.innerHTML = "Page Scrolled " + Math.round(progress)+ "%"
        }
// pre loader js
      var loader = document .getElementById("preloader");

      window.addEventListener("load", function(){
         loader.style.display = "none";
      })

    var typed = new Typed('.auto-type', {
      strings: ['Full Stack Web Developer.'],
      typeSpeed: 100,
      backSpeed:50,
      loop:true
    });
    
    
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:4,
        loop:true,
        margin:10,
        autoplay:false,
        autoplayTimeout:1500,
        autoplayHoverPause:false,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 3,
                nav: false
            }
        }
    });
    $(document).ready(function(){

      $(".owl-carousel").owlCarousel();

    });

  </script>
</body>
</html>