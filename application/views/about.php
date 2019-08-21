
        <section id="subheader" data-speed="8" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>About Us</h1>
                        <ul class="crumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="sep">/</li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-top no-bottom">
		
            <section id="section-about-us-2" class="side-bg no-padding" >
				<?php foreach($aboutus as $about){ ?>
                <div class="image-container col-md-5 pull-left" data-delay="0" style="background: url(<?php echo base_url(); ?>admin/uploads/aboutus/<?php echo $about->image; ?>);"></div>

                <div class="container">
                    <div class="row">
                        <div class="inner-padding">
					
                            <div class="col-md-6 col-md-offset-6 " data-animation="fadeInRight" data-delay="200">
                                <h2><?php echo $about->title;?></h2>

                              <?php echo $about->content;?>
                            </div>
					
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
					<?php } ?>
            </section>

            <!--<section id="section-team">
                <div class="container">



                    <div class="row">
                        <div class="col-md-12 container-4">
                            <!-- team member -->
                            <!--<div class="de-team-list">
                                <div class="team-pic">
                                    <img src="<?php echo base_url(); ?>assets/images/team/team_pic_1.jpg" class="img-responsive" alt="" />
                                </div>
                                <div class="team-desc col-md-12">
                                    <h3>John Smith</h3>
                                    <p class="lead">Project Manager</p>
                                    <div class="small-border"></div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla pariatur.</p>

                                    <div class="social">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- team close -->

                            <!-- team member -->
                           <!-- <div class="de-team-list">
                                <div class="team-pic">
                                    <img src="<?php echo base_url(); ?>assets/images/team/team_pic_2.jpg" class="img-responsive" alt="" />
                                </div>
                                <div class="team-desc col-md-12">
                                    <h3>Michael Dennis</h3>
                                    <p class="lead">Creative Director</p>
                                    <div class="small-border"></div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla pariatur.</p>

                                    <div class="social">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- team close -->

                            <!-- team member -->
                            <!--<div class="de-team-list">
                                <div class="team-pic">
                                    <img src="<?php echo base_url(); ?>assets/images/team/team_pic_3.jpg" class="img-responsive" alt="" />
                                </div>
                                <div class="team-desc col-md-12">
                                    <h3>Sarah Michelle</h3>
                                    <p class="lead">Creative Staff</p>
                                    <div class="small-border"></div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla pariatur.</p>
                                    <div class="social">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- team close -->

                            <!-- team member -->
                           <!-- <div class="de-team-list">
                                <div class="team-pic">
                                    <img src="<?php echo base_url(); ?>assets/images/team/team_pic_4.jpg" class="img-responsive" alt="" />
                                </div>
                                <div class="team-desc col-md-12">
                                    <h3>Katty Wilson</h3>
                                    <p class="lead">Creative Staff</p>
                                    <div class="small-border"></div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla pariatur.</p>
                                    <div class="social">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- team close -->

                           <!-- <div class="clearfix"></div>

                        </div>
                    </div>
                </div>
            </section>-->

            <section id="section-testimonial" class="text-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            <h1>Customer Says</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div id="testimonial-carousel" class="de_carousel  wow fadeInUp" data-wow-delay=".3s">
                    <?php foreach($testimonial as $testimonials){ ?>
                        <div class="col-md-6 item">
                            <div class="de_testi">
                                <blockquote>
                                    <p><?php echo $testimonials->content; ?></p>
                                    <div class="de_testi_by">
                                       <?php echo $testimonials->name; ?>,<?php echo $testimonials->profession; ?>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
					<?php } ?>
                    </div>
                </div>
            </section>

            <!-- section begin -->
            <section id="view-all-projects" class="call-to-action bg-color dark text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
                <a href="<?php echo base_url(); ?>contact" class="btn btn-line-black btn-big">Talk With Us</a>
            </section>
            <!-- logo carousel section close -->
           