
    <!-- footer section start -->
  
    <footer>
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <h2><span class="typing-3"></span></h2>
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
    <script src="script.js"></script>
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
    </script>
<!-- pre loader js  -->
  <script>
      var loader = document .getElementById("preloader");

      window.addEventListener("load", function(){
         loader.style.display = "none";
      })
  </script>
<script src="node_modules/typed.js/dist/typed.umd.js"></script>
<script src="assets/js/main.js"></script>
<script>
    var typed = new Typed('.auto-type', {
      strings: ['Full Stack Web Developer.'],
      typeSpeed: 100,
      backSpeed:50,
      loop:true
    });
  </script>
</body>
</html>