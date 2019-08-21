<style>
	.de_tab.tab_steps .de_nav li {
	     margin: 0px 0px 0px 7px; 
	}
</style>
<!-- content begin -->
<div id="content" class="no-bottom no-top">
	<!-- revolution slider begin -->
	<section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
		<div id="revolution-slider">
			<ul>
				<?php foreach($slider as $sliders){ ?>
				<li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
					<!--  BACKGROUND IMAGE -->
					<img src="<?php echo base_url(); ?>admin/uploads/slider/<?php echo $sliders->image; ?>" alt="" />
					<div class="tp-caption big-white sft" data-x="0" data-y="160" data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="450">
						<?php echo $sliders->title1; ?></div>
					<div class="tp-caption ultra-big-white customin customout start" data-x="0" data-y="center" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="400">
						<?php echo $sliders->title2; ?></div>
					<div class="tp-caption sfb" data-x="0" data-y="335" data-speed="400" data-start="800" data-easing="easeInOutExpo"> <a href="#" class="btn-slider">Our Portfolio
                                </a>
					</div>
				</li>
				<?php } ?>
			</ul>
		</div>
	</section>
	<!-- revolution slider close -->
	<!-- section begin -->
	<section id="section-about">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
					<h1>What We Do</h1>
					<div class="separator"><span><i class="fa fa-circle"></i></span>
					</div>
					<div class="spacer-single"></div>
				</div>
				<?php $i=1; foreach($whatwedo as $whatwedos){ ?>
				<div class="col-md-4 wow <?php if($i==1){ ?>fadeInLeft<?php }elseif($i==2){ ?>fadeInUp<?php }elseif($i==3){ ?>fadeInRight<?php } ?>" <?php if($i==2){ ?>data-wow-delay=".2s"
					<?php } ?>>
					<h3><span class="id-color"><?php echo $whatwedos->title;?></span> Design</h3>
					<?php echo $whatwedos->content;?>
					<div class="spacer-single"></div> <a class="image-popup-no-margins" href="<?php echo base_url(); ?>admin/uploads/whatwedo/<?php echo $whatwedos->image; ?>">
                                <img src="<?php echo base_url(); ?>admin/uploads/whatwedo/<?php echo $whatwedos->image; ?>" class="img-responsive" alt="">
                            </a>
				</div>
				<?php $i++; } ?>
				<!-- <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                            <h3><span class="id-color">Office</span> Design</h3>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                            ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            <div class="spacer-single"></div>
                            <img src="<?php echo base_url(); ?>assets/images/misc/pic_2.jpg" class="img-responsive" alt="">
                        </div>

                        <div class="col-md-4 wow fadeInRight">
                            <h3><span class="id-color">Commercial</span> Design</h3>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                            ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            <div class="spacer-single"></div>
                            <img src="<?php echo base_url(); ?>assets/images/misc/pic_3.jpg" class="img-responsive" alt="">
                        </div>--></div>
		</div>
	</section>
	<!-- section close -->
	<!-- section begin -->
	<section id="section-steps" class="text-light">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
					<h1>Our Process</h1>
					<div class="separator"><span><i class="fa fa-circle"></i></span>
					</div>
					<div class="spacer-single"></div>
				</div>
				<div class="col-md-12">
					<div class="de_tab tab_steps">
						<ul class="de_nav">
							<li class="active wow fadeIn" data-wow-delay="0s"><span>Meet & Agree</span>
								<div class="v-border"></div>
							</li>
							<li class="wow fadeIn" data-wow-delay=".4s"><span>Idea &amp; Concept</span>
								<div class="v-border"></div>
							</li>
							<li class="wow fadeIn" data-wow-delay=".8s"><span>Design &amp; Create</span>
								<div class="v-border"></div>
							</li>
							<li class="wow fadeIn" data-wow-delay="1.2s"><span>Build &amp; Install</span>
								<div class="v-border"></div>
							</li>
							<li class="wow fadeIn" data-wow-delay="1.6s"><span>EMI</span>
								<div class="v-border"></div>
							</li>
							<li class="wow fadeIn" data-wow-delay="1.8s"><span>Choose Design</span>
								<div class="v-border"></div>
							</li>
						</ul>
						<div class="de_tab_content">
							<div id="tab1">
								<p>Meet & Agree</p>
							</div>
							<div id="tab2">
								<p>Idea & Concept</p>
							</div>
							<div id="tab3">
								<p>Design & Create</p>
							</div>
							<div id="tab4">
								<p>Build & Install</p>
							</div>
							<div id="tab5">
								<p>Coming soon...</p>
							</div>
							<div id="tab6">
								<h3 class"text-center">Choose a room to get started</h3>
								<div class="row">
									<div class="col-sm-12 col-md-12 col-xs-12">
										<div class="col-sm-4 col-md-4 col-xs-12 text-center">
											<a href="<?php echo base_url(); ?>welcome/rooms_images">
												<p style="color:white;">Living Room</p>
												<div>
											    	<img src="<?php echo base_url(); ?>assets/images/Residential/GREEN GRACE 001.jpg" width="100%">
												</div>
											</a>
										</div>
										<div class="col-sm-4 col-md-4 col-xs-12">
											<a href="<?php echo base_url(); ?>welcome/rooms_images">
												<p style="color:white;">Bed Room</p>
												<img src="<?php echo base_url(); ?>assets/images/Residential/IMG_4484 - Copy.jpg" width="100%">
											</a>
										</div>
										<div class="col-sm-4 col-md-4 col-xs-12">
											<a href="<?php echo base_url(); ?>welcome/rooms_images">
												<p style="color:white;">Dinning Room</p>
												<img src="<?php echo base_url(); ?>assets/images/Residential/GREEN GRACE 002.jpg" width="100%">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section close -->
	<!-- section begin -->
	<section id="section-portfolio" class="no-top no-bottom" aria-label="section-portfolio">
		<div class="container">
			<div class="spacer-single"></div>
			<!-- portfolio filter begin -->
			<div class="row">
				<div class="col-md-12 text-center">
					<ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
						<li><a href="#" data-filter="*" class="selected">All Projects</a>
						</li>
						<li><a href="#" data-filter=".residential">Residential</a>
						</li>
						<li><a href="#" data-filter=".hospitals">Hospitals</a>
						</li>
						<li><a href="#" data-filter=".office">Office</a>
						</li>
						<li><a href="#" data-filter=".restaurant">Restaurant</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- portfolio filter close -->
		</div>
		<div id="gallery" class="gallery full-gallery de-gallery pf_full_width wow fadeInUp" data-wow-delay=".3s">
			<!-- gallery item -->
			<div class="item residential">
				<div class="picframe">
					<a class="simple-ajax-popup-align-top" href="project-details-1.html">
						<!--<span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Eco Green Interior</span>
                                    </span>
                                </span>-->
					</a>
					<img src="<?php echo base_url(); ?>assets/images/Residential/GREEN GRACE 001p.jpg" alt="" />
				</div>
			</div>
			<!-- close gallery item -->
			<!-- gallery item -->
			<div class="item hospitals">
				<div class="picframe">
					<a class="simple-ajax-popup-align-top" href="project-details-3.html">
						<!-- <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Apartment Renovation</span>
                                    </span>
                                </span>-->
					</a>
					<img src="<?php echo base_url(); ?>assets/images/Hospitals/67ab365504899b9c785eb4ef4144b052.jpg" alt="" />
				</div>
			</div>
			<!-- close gallery item -->
			<!-- gallery item -->
			<div class="item residential">
				<div class="picframe">
					<a class="simple-ajax-popup-align-top" href="project-details-youtube.html">
						<!-- <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Youtube Video</span>
                                    </span>
                                </span>-->
					</a>
					<img src="<?php echo base_url(); ?>assets/images/Residential/GREEN GRACE 002p.jpg" alt="" />
				</div>
			</div>
			<!-- close gallery item -->
			<!-- gallery item -->
			<div class="item residential">
				<div class="picframe">
					<a class="simple-ajax-popup-align-top" href="project-details-youtube.html">
						<!-- <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Youtube Video</span>
                                    </span>
                                </span>-->
					</a>
					<img src="<?php echo base_url(); ?>assets/images/Residential/IMG_3934p.jpg" alt="" />
				</div>
			</div>
			<!-- close gallery item -->
			<!-- gallery item -->
			<div class="item commercial">
				<div class="picframe">
					<a class="simple-ajax-popup-align-top" href="project-details.html">
						<!--<span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Restaurant In Texas</span>
                                    </span>
                                </span>-->
					</a>
					<img src="<?php echo base_url(); ?>assets/images/portfolio/pf%20(6).jpg" alt="" />
				</div>
			</div>
			<!-- close gallery item -->
			<!-- gallery item -->
			<div class="item residential">
				<div class="picframe">
					<a class="simple-ajax-popup-align-top" href="project-details-youtube.html">
						<!--<span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Summer House</span>
                                    </span>
                                </span>-->
					</a>
					<img src="<?php echo base_url(); ?>assets/images/GREEN GRACE 001p.jpg" alt="" />
				</div>
			</div>
			<!-- close gallery item -->
			<!-- gallery item -->
			<div class="item office">
				<div class="picframe">
					<a class="simple-ajax-popup-align-top" href="project-details-vimeo.html">
						<!--<span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Office On Space</span>
                                    </span>
                                </span>-->
					</a>
					<img src="<?php echo base_url(); ?>assets/images/Office spaces/fe53afd022f6892716b12300d9200634 (1).jpg" alt="" />
				</div>
			</div>
			<!-- close gallery item -->
			<!-- gallery item -->
			<div class="item residential">
				<div class="picframe">
					<a class="simple-ajax-popup-align-top" href="project-details-youtube.html">
						<!-- <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Youtube Video</span>
                                    </span>
                                </span>-->
					</a>
					<img src="<?php echo base_url(); ?>assets/images/Residential/IMG_4484 - Copyp.jpg" alt="" />
				</div>
			</div>
			<!-- close gallery item -->
			<div class="item office">
				<div class="picframe">
					<a class="simple-ajax-popup-align-top" href="project-details-vimeo.html">
						<!-- <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Vimeo Video</span>
                                    </span>
                                </span>-->
					</a>
					<img src="<?php echo base_url(); ?>assets/images/Office spaces/resize-15662070209836197985b87eaa2c478825fe3dd219cc5dd15c0.jpg" alt="" />
				</div>
			</div>
			<div class="item office">
				<div class="picframe">
					<a class="simple-ajax-popup-align-top" href="project-details-vimeo.html">
						<!-- <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Vimeo Video</span>
                                    </span>
                                </span>-->
					</a>
					<img src="<?php echo base_url(); ?>assets/images/Office spaces/4d697d86b1599aeb3cd1fcab36ca1fd4.jpg" alt="" />
				</div>
			</div>
			<!-- close gallery item -->
			<!-- gallery item -->
			<div class="item residential">
				<div class="picframe">
					<a class="simple-ajax-popup-align-top" href="project-details-youtube.html">
						<!-- <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Youtube Video</span>
                                    </span>
                                </span>-->
					</a>
					<img src="<?php echo base_url(); ?>assets/images/Residential/IMG_4485 - Copyp.jpg" alt="" />
				</div>
			</div>						<div class="item residential">				<div class="picframe">					<a class="simple-ajax-popup-align-top" href="project-details-youtube.html">						<!-- <span class="overlay">                                    <span class="pf_text">                                        <span class="project-name">Youtube Video</span>                                    </span>                                </span>-->					</a>					<img src="<?php echo base_url(); ?>assets/images/Residential/IMG_4487 - Copyp.jpg" alt="" />				</div>			</div>           <div class="item residential">				<div class="picframe">					<a class="simple-ajax-popup-align-top" href="project-details-youtube.html">						<!-- <span class="overlay">                                    <span class="pf_text">                                        <span class="project-name">Youtube Video</span>                                    </span>                                </span>-->					</a>					<img src="<?php echo base_url(); ?>assets/images/Residential/IMG_4493 - Copyp.jpg" alt="" />				</div>			</div>            <div class="item residential">				<div class="picframe">					<a class="simple-ajax-popup-align-top" href="project-details-youtube.html">						<!-- <span class="overlay">                                    <span class="pf_text">                                        <span class="project-name">Youtube Video</span>                                    </span>                                </span>-->					</a>					<img src="<?php echo base_url(); ?>assets/images/Residential/IMG_4497 - Copyp.jpg" alt="" />				</div>			</div>						<div class="item residential">				<div class="picframe">					<a class="simple-ajax-popup-align-top" href="project-details-youtube.html">						<!-- <span class="overlay">                                    <span class="pf_text">                                        <span class="project-name">Youtube Video</span>                                    </span>                                </span>-->					</a>					<img src="<?php echo base_url(); ?>assets/images/Residential/IMG_4498 - Copyp.jpg" alt="" />				</div>			</div>             			 <div class="item residential">				<div class="picframe">					<a class="simple-ajax-popup-align-top" href="project-details-youtube.html">						<!-- <span class="overlay">                                    <span class="pf_text">                                        <span class="project-name">Youtube Video</span>                                    </span>                                </span>-->					</a>					<img src="<?php echo base_url(); ?>assets/images/Residential/IMG_4499p.jpg" alt="" />				</div>			</div>			 			  <div class="item residential">				<div class="picframe">					<a class="simple-ajax-popup-align-top" href="project-details-youtube.html">						<!-- <span class="overlay">                                    <span class="pf_text">                                        <span class="project-name">Youtube Video</span>                                    </span>                                </span>-->					</a>					<img src="<?php echo base_url(); ?>assets/images/Residential/IMG_4500p.jpg" alt="" />				</div>			</div>						            <div class="item residential">				<div class="picframe">					<a class="simple-ajax-popup-align-top" href="project-details-youtube.html">						<!-- <span class="overlay">                                    <span class="pf_text">                                        <span class="project-name">Youtube Video</span>                                    </span>                                </span>-->					</a>					<img src="<?php echo base_url(); ?>assets/images/Residential/IMG_4504p.jpg" alt="" />				</div>			</div>             <div class="item residential">				<div class="picframe">					<a class="simple-ajax-popup-align-top" href="project-details-youtube.html">						<!-- <span class="overlay">                                    <span class="pf_text">                                        <span class="project-name">Youtube Video</span>                                    </span>                                </span>-->					</a>					<img src="<?php echo base_url(); ?>assets/images/Residential/IMG_4507p.jpg" alt="" />				</div>			</div>						 <div class="item residential">				<div class="picframe">					<a class="simple-ajax-popup-align-top" href="project-details-youtube.html">						<!-- <span class="overlay">                                    <span class="pf_text">                                        <span class="project-name">Youtube Video</span>                                    </span>                                </span>-->					</a>					<img src="<?php echo base_url(); ?>assets/images/Residential/IMG_4513p.jpg" alt="" />				</div>			</div>						 <div class="item residential">				<div class="picframe">					<a class="simple-ajax-popup-align-top" href="project-details-youtube.html">						<!-- <span class="overlay">                                    <span class="pf_text">                                        <span class="project-name">Youtube Video</span>                                    </span>                                </span>-->					</a>					<img src="<?php echo base_url(); ?>assets/images/Residential/IMG_4515p.jpg" alt="" />				</div>			</div>
			<!-- close gallery item -->
			<div class="item office">
				<div class="picframe">
					<a class="simple-ajax-popup-align-top" href="project-details-vimeo.html">
						<!-- <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Vimeo Video</span>
                                    </span>
                                </span>-->
					</a>
					<img src="<?php echo base_url(); ?>assets/images/Office spaces/resize-156620671216213751641d3eb6f3ed66e1b101ce9a38ae516391.jpg" alt="" />
				</div>
			</div>
			<!-- gallery item -->
			<div class="item hospitals">
				<div class="picframe">
					<a class="simple-ajax-popup-align-top" href="project-details-3.html">
						<!-- <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Apartment Renovation</span>
                                    </span>
                                </span>-->
					</a>
					<img src="<?php echo base_url(); ?>assets/images/Hospitals/resize-156620754859205900682454d6711459e7654e32d77302bf4f6.jpg" alt="" />
				</div>
			</div>
			<!-- close gallery item -->
		</div>
		<div id="loader-area">
			<div class="project-load"></div>
		</div>
	</section>
	<!-- section close -->
	<!-- section begin -->
	<section id="view-all-projects" class="call-to-action bg-color text-center" data-speed="5" data-type="background" aria-label="view-all-projects"> <a href="#" class="btn btn-line-black btn-big">View All Projects</a>
	</section>
	<!-- logo carousel section close -->
	<!-- section begin -->
	<section id="section-testimonial" class="text-light">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
					<h1>Customer Says</h1>
					<div class="separator"><span><i class="fa fa-circle"></i></span>
					</div>
					<div class="spacer-single"></div>
				</div>
			</div>
			<div id="testimonial-carousel" class="de_carousel  wow fadeInUp" data-wow-delay=".3s">
				<?php foreach($testimonial as $testimonials){ ?>
				<div class="col-md-6 item">
					<div class="de_testi">
						<blockquote>
							<p>
								<?php echo $testimonials->content; ?></p>
						</blockquote>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- section close -->