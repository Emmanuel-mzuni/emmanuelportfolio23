<?php let_in('templates/header');?>
<?php let_in('templates/nav');?>
<!-- about section start -->
<section class="about" id="about">
    <div class="max-width">
        <h2 class="title">About me <i class="bi bi-person"></i> </h2>
        <div class="about-content">
            <div class="column left">
                <!-- <img src="assets/img/webdev.jpg" alt="img"> -->
            </div>
            <div class="column right">
                <div class="text"><?php echo $data[0]->header;?> 
                <i class="yellow bi bi-emoji-smile-fill"></i></div>
                <p><?php echo $data[0]->msg;?></p>
                <a href="contact.html#contact">Hire Me</a>
            </div>
        </div>
    </div>
</section>
<br>
<hr>
<?php let_in('templates/footer');?>