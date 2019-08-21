
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       All About us
        <small>About us</small>
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">About us</h3>
			<!--  <div style="text-align:right;"><a href="<?php echo base_url(); ?>admin/welcome/addwhatwedo" class="btn btn-warning" >Add Conatct Details</a></div>-->
            </div>
			<?php if ($this->session->flashdata('aboutus_ins') != ''){ ?>
			<span  style="color:green;"><?php echo $this->session->flashdata('aboutus_ins');?></span> <?php } ?>	
			<?php if ($this->session->flashdata('aboutus_upd') != ''){ ?>
			<span  style="color:green;"><?php echo $this->session->flashdata('aboutus_upd');?></span> <?php } ?>
			<?php if ($this->session->flashdata('aboutus_del') != ''){ ?>
			<span  style="color:green;"><?php echo $this->session->flashdata('aboutus_del');?></span> <?php } ?>
			<?php if ($this->session->flashdata('aboutus_not_del') != ''){ ?>
			<span  style="color:green;"><?php echo $this->session->flashdata('aboutus_not_del');?></span> <?php } ?>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
				  <th>Sr no.</th>
                  <th>Image</th>
                  <th>Title</th>
				  <th>Content</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php 
				$i=1;
				foreach($aboutus as $aboutuss)
				      {
			    ?>
                <tr>
					<td> <?php echo $i++; ?></td>
					<td><img src="<?php echo base_url(); ?>uploads/aboutus/<?php echo $aboutuss->image; ?>" width="200"></td>
					<td><?php echo $aboutuss->title; ?></td>
					<td><?php echo $aboutuss->content; ?></td>
                    <td><a href="<?php echo base_url(); ?>welcome/editaboutus/<?php echo $aboutuss->id; ?>"  class="btn btn-primary"><i class="fa fa-edit"></i></a>
                </tr>
				<?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
 

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
