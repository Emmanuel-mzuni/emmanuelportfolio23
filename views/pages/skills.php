<?php let_in('templates/header');?>
<?php let_in('templates/nav');?>


    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                        I create successful responsive websites that are fast, easy to use, and built with best practices. The main area of my expertise is front-end development, HTML, CSS, JS and coding interactive layouts.
                        <br>
                        Visit my <a href="#" id="link">Github repository</a> for more details.

                    </p>
                </div>
                <div class="column right">
                    <?php foreach ($data as $value) {?>
                    <div class="bars">
                        <div class="info">
                            <span><?php echo ucwords($value->skill);?></span>
                            <span><?php echo $value->percent;?></span>
                        </div>
                        <div class="line <?php echo $value->skill;?>"></div>
                    </div>    
                    <?php }?>
                    
                </div>
            </div>
        </div>
    </section>
<?php let_in('templates/footer');?>