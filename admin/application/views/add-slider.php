 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>welcome/dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Slider</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Slider</h3>
            </div>
			
			<br>
			<?php if ($this->session->flashdata('slider_not_ins') != ''){ ?>
            <span  style="color:red;"><?php echo $this->session->flashdata('slider_not_ins');?></span> <?php } ?>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="<?php echo base_url(); ?>welcome/saveslider" enctype="multipart/form-data">
               <div class="box-body">
				<div class="form-group">
                  <label for="exampleInputPassword1">Image</label>
                 
                       <input type="file"  class="form-control" name="image">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Title1</label>
                       <input type="text"  class="form-control" value="" name="title1" required>
                </div>
                
                 <div class="form-group">
                  <label for="exampleInputPassword1">Title2</label>
                  <input type="text"  class="form-control" value="" name="title2" required>
                </div>
               </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>