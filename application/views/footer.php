 <!-- footer begin -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>LP Design Studio</h2><!--<img src="images/logo.png" class="logo-small" alt="">--><br> We are team based on Brookylin. Our
                            expertise on Interior Design. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                            et quasi architecto beatae vitae dicta sunt explicabo.
                        </div>

                        <div class="col-md-4">
                            <div class="widget widget_recent_post">
                                <h3>Latest News</h3>
                                <ul>
                                    <li><a href="#">5 Things That Take a Room from Good to Great</a></li>
                                    <li><a href="#">Functional and Stylish Wall-to-Wall Shelves</a></li>
                                    <li><a href="#">9 Unique and Unusual Ways to Display Your TV</a></li>
                                    <li><a href="#">The 5 Secrets to Pulling Off Simple, Minimal Design</a></li>
                                    <li><a href="#">How to Make a Huge Impact With Multiples</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h3>Contact Us</h3>
                            <div class="widget widget-address">
                                <?php foreach($contact_information as $contact_info){?>
                                <address>
                                    <span><?php echo $contact_info->address; ?></span>
                                    <span><strong>Phone:</strong><?php echo $contact_info->phone1; ?> | <?php echo $contact_info->phone2; ?> </span>
                                    <span><strong>Email:</strong><a href="#"><?php echo $contact_info->email; ?></a></span>
                                    <span><strong>Web:</strong><a href="#test"><?php echo $contact_info->web; ?></a></span>
                                    <span><strong>Open</strong><?php echo $contact_info->open_time; ?></span>
                                </address>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="subfooter">
                    <div class="container">
                        <div class="row mobile">
                            <div class="col-md-4">
                                &copy; Copyright 2019 - All Rights Reserved to <span class="id-color">Lp Design Studio</span>
                            </div>
                            <div class="col-md-4 text-right">
                                <div class="social-icons">
                                    <a href="https://www.facebook.com/Lpdesignstudio-105207107515371/?modal=admin_todo_tour" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                    <a href="https://in.pinterest.com/lpdesignstudio19/" target="_blank"><i class="fa fa-pinterest fa-lg"></i></a>
                                    <a href="https://www.instagram.com/lpdesignstudio19" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
                                </div>
                            </div>
							<div class="col-md-4">
								<span style="float: right;">DESIGNED & DEVELOPED BY <a href="#">Arka infoteck</a></span>
							</div>
                        </div>
                    </div>
                </div>
                <a href="#" id="back-to-top"></a>
            </footer>
            <!-- footer close -->
        </div>
    </div>

    <!-- style switcher
    ================================================== -->
    <!-- Javascript Files
    ================================================== -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jpreLoader.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/easing.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.flexslider-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollto.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.countTo.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/classie.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/video.resize.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/validation.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/enquire.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/designesia.js"></script>
    <script src="<?php echo base_url(); ?>assets/demo/demo.js"></script>
    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
</body>
</html>