
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Contact Info
        <small>Contacts Info</small>
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Contacts Info</h3>
			<!--  <div style="text-align:right;"><a href="<?php echo base_url(); ?>admin/welcome/addcontacts" class="btn btn-warning" >Add Conatct Details</a></div>-->
            </div>
			<?php if ($this->session->flashdata('contacts_ins') != ''){ ?>
			<span  style="color:green;"><?php echo $this->session->flashdata('contacts_ins');?></span> <?php } ?>	
			<?php if ($this->session->flashdata('contacts_upd') != ''){ ?>
			<span  style="color:green;"><?php echo $this->session->flashdata('contacts_upd');?></span> <?php } ?>
			<?php if ($this->session->flashdata('contacts_del') != ''){ ?>
			<span  style="color:green;"><?php echo $this->session->flashdata('contacts_del');?></span> <?php } ?>
			<?php if ($this->session->flashdata('contacts_not_del') != ''){ ?>
			<span  style="color:green;"><?php echo $this->session->flashdata('contacts_not_del');?></span> <?php } ?>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
				  <th>Sr no.</th>
                  <th>Web</th>
                  <th>Email</th>
				  <th>Phone1</th>
				  <th>Phone2</th>
				  <th>Open Time</th>
				  <th>Address</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php 
				$i=1;
				foreach($contactinfo as $contactinfos)
				      {
			    ?>
                <tr>
					<td> <?php echo $i++; ?></td>
					<td><?php echo $contactinfos->web; ?></td>
					<td><?php echo $contactinfos->email; ?></td>
					<td><?php echo $contactinfos->phone1; ?></td>
					<td><?php echo $contactinfos->phone2; ?></td>
					<td><?php echo $contactinfos->open_time; ?></td>
					<td><?php echo $contactinfos->address; ?></td>
                    <td><a href="<?php echo base_url(); ?>welcome/editcontactinfo/<?php echo $contactinfos->id; ?>"  class="btn btn-primary"><i class="fa fa-edit"></i></a>
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
