<?php let_in('templates/header');?>
<?php let_in('templates/nav');?>
    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <span class="text auto-type-c"></span>
                    <p>If you are interested in working together? Please fill out the form aside with some info about your project and I will get back to you as soon as I can. Please allow a couple days for me to respond</p>
                    
                    
                    <div class="icons">
                    <?php 
                    foreach ($data as $value) {?>
                    <div class="row">
                        <i class="fas bi <?php echo $value->icon;?>"></i>
                        <div class="info">
                            <div class="head"><?php echo $value->header;?></div>
                            <div class="sub-title"><?php echo $value->any;?></div>
                        </div>
                    </div>
                    <?php }?>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php let_in('templates/footer');?>