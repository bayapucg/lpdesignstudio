<style>
   ul {
   list-style-type: none;
   }
   li {
   display: inline-block;
   }
   input[type="checkbox"][id^="cb"] {
   display: none;
   }
   label {
   border: 1px solid #fff;
   padding: 10px;
   display: block;
   position: relative;
   margin: 10px;
   cursor: pointer;
   }
   label:before {
   background-color: white;
   color: white;
   content: " ";
   display: block;
   border-radius: 50%;
   border: 1px solid grey;
   position: absolute;
   top: -5px;
   left: -5px;
   width: 25px;
   height: 25px;
   text-align: center;
   line-height: 28px;
   transition-duration: 0.4s;
   transform: scale(0);
   }
   label img {
   height: auto;
   width: 100%;
   transition-duration: 0.2s;
   transform-origin: 50% 50%;
   }
   :checked + label {
   border-color: #ddd;
   }
   :checked + label:before {
   content: "✓";
   background-color: grey;
   transform: scale(1);
   }
   :checked + label img {
   transform: scale(0.9);
   box-shadow: 0 0 5px #333;
   z-index: -1;
   }
</style>
<!-- subheader -->
<section id="subheader" data-speed="8" data-type="background">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1>Living Room</h1>
            <ul class="crumb">
               <li><a href="index.html">Home</a></li>
               <li class="sep">/</li>
               <li><a href="services.html">Living Room</a></li>
               <li class="sep">/</li>
               <li>Living Room</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<!-- subheader close -->
<!-- content begin -->
<div id="content">
   <div class="container">
      <div class="row">
         <!--<div class="col-sm-4 col-md-4 col-xs-4">
            <img src="<?php echo base_url();  ?>assets/images/services/p3_a.jpg" width="100%">
            
            </div>
            <div class="col-sm-4 col-md-4 col-xs-4">
            <img src="<?php echo base_url();  ?>assets/images/services/p3_a.jpg" width="100%">
            
            </div>
            <div class="col-sm-4 col-md-4 col-xs-4">
            <img src="<?php echo base_url();  ?>assets/images/services/p3_a.jpg" width="100%">
            
            </div>
            <div class="col-sm-4 col-md-4 col-xs-4">
            <img src="<?php echo base_url();  ?>assets/images/services/p3_a.jpg" width="100%">
            
            </div><div class="col-sm-4 col-md-4 col-xs-4">
            <img src="<?php echo base_url();  ?>assets/images/services/p3_a.jpg" width="100%">
            
            </div><div class="col-sm-4 col-md-4 col-xs-4">
            <img src="<?php echo base_url();  ?>assets/images/services/p3_a.jpg" width="100%">
            
            </div><div class="col-sm-4 col-md-4 col-xs-4">
            <img src="<?php echo base_url();  ?>assets/images/services/p3_a.jpg" width="100%">
            
            </div>-->
			<div class="col-sm-12 col-xs-12 col-md-12" style="text-align:right;"><input type="button" class="btn btn-primary" value="Continue"></div>
		
            <div class="row">
               <div class="col-sm-4">
                  <li>
                     <input type="checkbox" id="cb1" />
                     <label for="cb1"><img src="<?php echo base_url();  ?>assets/images/Residential/IMG_3934.jpg"></label>
                  </li>
               </div>
               <div class="col-sm-4">
                  <li>
                     <input type="checkbox" id="cb2" />
                     <label for="cb2"><img src="<?php echo base_url();  ?>assets/images/Residential/IMG_3934.jpg"></label>
                  </li>
               </div>
               <div class="col-sm-4">
                  <li>
                     <input type="checkbox" id="cb3" />
                     <label for="cb3"><img src="<?php echo base_url();  ?>assets/images/Residential/IMG_3934.jpg"></label>
                  </li>
               </div>
               <div class="col-sm-4">
                  <li>
                     <input type="checkbox" id="cb4" />
                     <label for="cb4"><img src="<?php echo base_url();  ?>assets/images/Residential/IMG_3934.jpg"></label>
                  </li>
               </div>
            </div>
         </ul>
      </div>
   </div>
</div>
<section id="view-all-projects" class="call-to-action bg-color text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
   <a href="<?php echo base_url();?>contact" class="btn btn-line-black btn-big">Get Quotation</a>
</section>
