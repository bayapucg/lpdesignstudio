
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       All Testimonial
        <small>Testimonial</small>
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Testimonial</h3>
			 <div style="text-align:right;"><a href="<?php echo base_url(); ?>welcome/addtestimonial" class="btn btn-warning" >Add Testimonial</a></div>
            </div>
			<?php if ($this->session->flashdata('testimonial_ins') != ''){ ?>
			<span  style="color:green;"><?php echo $this->session->flashdata('ourprocess_ins');?></span> <?php } ?>	
			<?php if ($this->session->flashdata('testimonial_upd') != ''){ ?>
			<span  style="color:green;"><?php echo $this->session->flashdata('testimonial_upd');?></span> <?php } ?>
			<?php if ($this->session->flashdata('testimonial_del') != ''){ ?>
			<span  style="color:green;"><?php echo $this->session->flashdata('testimonial_del');?></span> <?php } ?>
			<?php if ($this->session->flashdata('testimonial_not_del') != ''){ ?>
			<span  style="color:green;"><?php echo $this->session->flashdata('testimonial_not_del');?></span> <?php } ?>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
				  <th>Sr no.</th>
                  <th>Name</th>
				   <th>Profession</th>
				  <th>Content</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php 
				$i=1;
				foreach($testimonials as $testimonial)
				      {
			    ?>
                <tr>
					<td> <?php echo $i++; ?></td>
					<td><?php echo $testimonial->name; ?></td>
					<td><?php echo $testimonial->profession; ?></td>
					<td><?php echo $testimonial->content; ?></td>
                    <td><a href="<?php echo base_url(); ?>welcome/edittestimonial/<?php echo $testimonial->id; ?>"  class="btn btn-primary"><i class="fa fa-edit"></i></a>
					<a href="<?php echo base_url(); ?>welcome/deletetestimonial/<?php echo $testimonial->id; ?>"  class="btn btn-danger"><i class="fa fa-remove"></i></a>
					</td>
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
