
         <!-- subheader -->
        <section id="subheader" data-speed="8" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Contact</h1>
                        <ul class="crumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="sep">/</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-top">
           <!-- <section class="no-top" aria-label="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1345.8280012500607!2d78.38748333300316!3d17.432103731630328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdc04b2d31f9e1cd9!2sRegus+-+Hyderabad+Hitech+City!5e0!3m2!1sen!2sin!4v1565332180696!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </section>
-->
            <div class="container">
                <div class="row">

                    <div class="col-md-8">
                        <h3>Send Us Message</h3>
                        	<?php if($this->session->flashdata('contact')){?> 
							<div class="alert alert-success">
                            <?php echo $this->session->flashdata('contact'); ?>
                            </div><?php  }  ?>
                        <form id='contact_form' method="post" action='<?php echo base_url(); ?>welcome/contactus'>
                            <div class="row">
                                <div class="col-md-4">
                                    <div id='name_error' class='error'>Please enter your name.</div>
                                    <div>
                                        <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                    </div>

                                    <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                    <div>
                                        <input type='email' name='email' id='email' class="form-control" placeholder="Your Email">
                                    </div>

                                    <div id='phone_error' class='error'>Please enter your phone number.</div>
                                    <div>
                                        <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone" pattern="[6789][0-9]{9}" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div id='message_error' class='error'>Please enter your message.</div>
                                    <div>
                                        <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <p id='submit'>
                                        <input type='submit' id='' value='Submit Form' class="btn btn-line">
                                    </p>
								
                                    <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                    <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div id="sidebar" class="col-md-4">

                        <div class="widget widget_text">
                            <h3>Contact Info</h3>
                            <?php foreach($contact_information as $contact_info){ ?>
                            <address>
                                <span>I Labs,hyderabad Technology Park, Level 2,Oval Building,Plot No.18,Inorbit mall Road ,Hyderabad-500081</span>
                                <span><strong>Phone:</strong><?php echo $contact_info->phone1; ?> | <?php echo $contact_info->phone2; ?></span>
                                <span><strong>Email:</strong><a href="#"><?php echo $contact_info->email; ?></a></span>
                                <span><strong>Web:</strong><a href="#test"><?php echo $contact_info->web; ?></a></span>
                                <span><strong>Open</strong><?php echo $contact_info->open_time; ?></span>
                            </address>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
     