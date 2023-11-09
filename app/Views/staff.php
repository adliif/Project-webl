
     
    <!-- Add the Bootstrap CSS file -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Add the DataTables CSS file -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

    <!-- Add the Bootstrap JS file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Add the DataTables JS file -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>



<div class="container">
    <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
          	<div class="row">
          		<div class="card">
					<div class="card-header">
						<div class="d-flex justify-content-between align-items-center">
							<h1>Data Staff Hotel</h1>
							<button class="btn btn-primary" onclick="tambah()">Tambah</button>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<table class="table table-striped" id="table">
									<tr>
										<th>No</th>
										<th>Nama Staff</th>
										<th>Alamat</th>
										<th>Telepon</th>
										<th>Action</th>
									</tr>

									<?php 
									$no = 1;
									foreach ($list as $value): ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $value->nama_staf ?></td>
											<td><?php echo $value->alamat ?></td>
											<td><?php echo $value->no_telepon ?></td>
											<td>
												<a href="<?php echo base_url('home/hapus').'/'.$value->id?>" class="btn btn-danger">Hapus</a>
												<a href="<?php echo base_url('home/edit').'/'.$value->id?>" class="btn btn-info">Edit</a>
											</td>
										</tr>
									<?php $no++; endforeach ?>

								</table>
							</div>
						</div>
					</div>
				</div>
          		
          	</div>
          </div>
      </div>
  </div>
</div>



<div class="modal" tabindex="-1" id="modal_form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Input Data Staf</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form method="post" action="<?= base_url('home/tambah') ?>">
        <div class="row">
        	  <div class="col-md-12">
                   <div class="form-group">
                                             <label class="">Nama Staff</label>
                                            <input name="nama_staf" id="nama_staf" placeholder="Masukan Nama Staff" class="form-control" type="text" >
                                            <span class="help-block"></span>
					</div>
                </div>
        </div>

        <div class="row">
        	  <div class="col-md-12">
                   <div class="form-group">
                                             <label class="">Alamat Staff</label>
                                            <input name="alamat" id="alamat" placeholder="Masukan Alamat Staff" class="form-control" type="text" >
                                            <span class="help-block"></span>
					</div>
                </div>
        </div>

        <div class="row">
        	  <div class="col-md-12">
                   <div class="form-group">
                                             <label class="">No Telepon Staff</label>
                                            <input name="no_telepon" id="no_telepon" placeholder="Masukan No Telepon Staff" class="form-control" type="text" >
                                            <span class="help-block"></span>
					</div>
                </div>
        </div>

    		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="submit" class="btn btn-primary">Save changes</button> -->
        <button type="submit" class="btn btn-success">Simpan Data</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript">
	function tambah(){
		// $('#form')[0].reset(); // reset form on modals
	    // $('.form-group').removeClass('has-error'); // clear error class
	    // $('.help-block').empty(); // clear error string
	    $('#modal_form').modal('show'); // show bootstrap modal
	    $('.modal-title').text('Input Staf Baru'); // Set Title to Bootstrap modal title
	}


$(document).ready(function() {
	// new DataTable('#example');
	// alert();
	 $('#table').DataTable();
});



</script>