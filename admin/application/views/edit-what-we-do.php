 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>welcome/dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">What we do</li>
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
              <h3 class="box-title">Edit What we do</h3>
            </div>
			
			<br>
			<?php if ($this->session->flashdata('whatwedo_not_ins') != ''){ ?>
            <span  style="color:red;"><?php echo $this->session->flashdata('whatwedo_not_ins');?></span> <?php } ?>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="<?php echo base_url(); ?>welcome/updatewhatwedo/<?php  echo $whatwedo->id; ?>" enctype="multipart/form-data">
               <div class="box-body">
				<div class="form-group">
                  <label for="exampleInputPassword1">Image</label>
                  <div>
                      <img src="<?php echo base_url(); ?>uploads/whatwedo/<?php echo $whatwedo->image;  ?>" width="500" >
                  </div>
                       <input type="file"  class="form-control" name="image">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Title</label>
                       <input type="text"  class="form-control" value="<?php echo $whatwedo->title; ?>" name="title" required>
                </div>
                
                 <div class="form-group">
                  <label for="exampleInputPassword1">Content</label>
                       <textarea  class="form-control" id="editor1" name="content" ><?php echo $whatwedo->content; ?></textarea>
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