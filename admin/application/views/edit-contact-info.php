 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>welcome/dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Contact Information</li>
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
              <h3 class="box-title">Edit Contact Infprmation</h3>
            </div>
			
			<br>
			<?php if ($this->session->flashdata('contacts_not_ins') != ''){ ?>
            <span  style="color:red;"><?php echo $this->session->flashdata('contacts_not_ins');?></span> <?php } ?>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="<?php echo base_url(); ?>welcome/updatecontactinfo/<?php  echo $contactinfo->id; ?>" enctype="multipart/form-data">
               <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Web</label>
                       <input type="text"  class="form-control" value="<?php echo $contactinfo->web; ?>" name="web" required>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                       <input type="text"  class="form-control" value="<?php echo $contactinfo->email; ?>" name="email" required>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Phone1</label>
                       <input type="text"  class="form-control" value="<?php echo $contactinfo->phone1; ?>" name="phone1" required>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Phone2</label>
                       <input type="text"  class="form-control" value="<?php echo $contactinfo->phone2; ?>" name="phone2" required>
                </div>
                
                 <div class="form-group">
                  <label for="exampleInputPassword1">Address</label>
                  <textarea  class="form-control" name="address" ><?php echo $contactinfo->address; ?></textarea>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Open Time</label>
                  <textarea  class="form-control"  name="open_time" ><?php echo $contactinfo->open_time; ?></textarea>
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