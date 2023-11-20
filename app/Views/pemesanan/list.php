<?php echo $this->extend('layout/template') ?>
<?php echo $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
          	<div class="row">
          		<div class="card">
					<div class="card-header">
						<div class="d-flex justify-content-between align-items-center">
							<h1><?php echo $title ?></h1>
							<button class="btn btn-primary" onclick="tambah()">Tambah</button>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<table id="table_pemesanan" class="table table-striped table-bordered display" style="width:100%;background-color: #fff">
									<thead>
										<tr>
											<th>No</th>
											<th>Nomer Kamar</th>
											<th>Nama Kamar</th>
											<!-- <th>Fasilitas</th> -->
											<th>Tanggal Pemesanan</th>
											<th>Tanggal Masuk</th>
											<th>Tanggal Keluar</th>
											<th>Status</th>
											<th>Harga</th>
											<th>Action</th>
										</tr>
									</thead>
									
									<tbody>	
										<?php 
									$no = 1;
									foreach ($list as $value): ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $value['cNoKamar'] ?></td>
											<td><?php echo $value['cNameKamar'] ?></td>
											<!-- <td><?php echo $value['cFasilitas'] ?></td> -->
											<td><?php echo $value['tanggal_pemesanan'] ?></td>
											<td><?php echo $value['tanggal_masuk'] ?></td>
											<td><?php echo $value['tanggal_keluar'] ?></td>
											<td style="font-weight: bold;"><?php echo $value['status'] ?></td>
											
											<td><?php echo number_format($value['harga'],0,',','.') ?></td>
											
											<td style="width: 280px">
												<?php if ( $value['status']=="Dikonfirmasi"){ ?>
													<input class="btn btn-dark" name="" value="Sudah Dikonfirmasi" disabled="">
												<?php } else{?>
												
		      									<form action="#" id="form_konfirmasi" class="">
												    <!-- Your form fields here -->
												    <a onclick="edit_data('<?= $value['id'];?>')" class="btn btn-info">Edit</a>
		      										<a onclick="hapus('<?= $value['id'];?>')" class="btn btn-danger">Hapus</a>
												    <a onclick="acc('<?= $value['id'];?>')" class="btn btn-success">Konfirmasi</a>
												    <!-- <button type="submit">Update Data</button> -->
												</form>
		      									
		      									<?php } ?>
											</td>
										</tr>
									<?php $no++; endforeach ?>										
									</tbody>
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






<div class="modal glass" tabindex="-1" id="modal_form">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: #E1FCF2">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="#" id="form" class="form-horizontal">
      	<!-- <form method="post" action="<?= base_url('kamar/simpan'); ?>" id="form"> -->
      	<?php echo csrf_field(); ?>
      <div class="modal-body ">
        	<input type="hidden" name="id_kamar" id="id_kamar" value="">
        	
          <div class="mb-3">
	            <label for="recipient-name" class="col-form-label">Pilih Kamar</label>
	            <!-- <input type="text" class="form-control" id="id_kamar" name="id_kamar" placeholder="Masukan Nomor Kamar"> -->
	            <select class="form-control" name="id_kamar" id="id_kamar">
	            	<option value="">Pilih</option>
	            	<?php foreach ($list2 as $value): ?>
	            		<option value="<?php echo $value['id'] ?>"><?php echo $value['cNoKamar'].' - '.$value['cNameKamar']; ?></option>
	            	<?php endforeach ?>
	            </select>
          </div>
                <div class="mb-3">
                	 <label class="col-form-label">Tanggal Pemesanan</label>
                    <input name="tanggal_pemesanan" id="tanggal_pemesanan" placeholder="Masukan Nama Kamar" class="form-control" type="date">
                    <span class="help-block"></span>
                </div>

                <div class="mb-3">
                	 <label class="col-form-label">Tanggal Masuk</label>
                    <input name="tanggal_masuk" id="tanggal_masuk" placeholder="Masukan Tanggal Masuk" class="form-control" type="date">
                    <span class="help-block"></span>
                </div>

                <div class="mb-3">
                	 <label class="col-form-label">Tanggal Keluar</label>
                    <input name="tanggal_keluar" id="tanggal_keluar" placeholder="Masukan Tanggal Keluar" class="form-control" type="date">
                    <span class="help-block"></span>
                </div>

                 <div class="mb-3">
                	 <label class="col-form-label">Harga</label>
                    <input name="harga" id="harga" placeholder="Masukan harga" class="form-control" type="text">
                    <span class="help-block"></span>
                </div>
              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input onclick="save_data()" class="btn btn-info" id="btnSave" value="Simpan Data" readonly="">
         <!-- <button type="submit" class="btn btn-primary" id="btnSave">Save</button> -->

      </div>
    </div>
     </form>
  </div>
</div>

<script type="text/javascript">
	var save_method;
	var id_menu_T;	
	$(document).ready(function() {
		$('#table_pemesanan').DataTable({ 
        "paging": true,
        });
	});

	function tambah(){
		save_method = "add";
		$('#form')[0].reset(); 
		$('#loading1').modal("show");
		$('#modal_form').modal("show");
		$('#loading1').modal("hide");	
		$('.modal-title').text('Tambah Data');
	}

	function save_data(){
		if(id_kamar.value == "" || tanggal_pemesanan.value == "" || tanggal_masuk.value == "" ||tanggal_keluar.value == "" || harga.value == ""){
				// alert("lengkapi data");
				swal("Peringatan!!","Lengkapi Data Anda","error")
			return false;
		}

	$('#loading1').modal('show');
   
    var url;
    if(save_method == 'add') {
        url = "<?php echo base_url('pemesanan/simpan') ?>";
    } else {
        url = "<?php echo base_url('pemesanan/update')?>/"+id_menu_T;
    }


        $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
        	$('#loading1').modal('hide');
        	swal({
                        title: "Simpan",
                        text: "Data Berhasil Di Simpan",
                        type: "success",
                        confirmButtonClass: 'btn-primary btn-md waves-effect waves-light',
                        confirmButtonText: 'Oke'
                    },
                    function(isConfirm){
                        if (isConfirm) {
                            window.location.href='<?php echo base_url("pemesanan/"); ?>';
                        }
                    });
            $('#btnSave').text('Save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
           alert('error');

        }
    });

	}




 function hapus(id){
   swal({
                title: "Apakah Anda Yakin?",
                text: "Hapus Data",
                type: "warning",
                showCancelButton: true,
                cancelButtonClass: 'btn-default btn-md waves-effect',
                confirmButtonClass: 'btn-danger btn-md waves-effect waves-light',
                confirmButtonText: 'Hapus!'
            },
function(isConfirm){
  if (isConfirm) {
            $.ajax({
            url : "<?php echo base_url('pemesanan/hapus/')?>"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                swal({
                        title: "Delete",
                        text: "Data Berhasil Di Hapus",
                        type: "error",
                        confirmButtonClass: 'btn-primary btn-md waves-effect waves-light',
                        confirmButtonText: 'Oke'
                    },

                    function(isConfirm){
                        if (isConfirm) {
                            location.reload();
                        }
                    });
                    
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
  }
});

}


function edit_data(id){
  id_menu_T = id;

    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    swal({
                title: "Apakah Anda Yakin?",
                text: "Edit Data",
                type: "warning",
                showCancelButton: true,
                cancelButtonClass: 'btn-default btn-md waves-effect',
                confirmButtonClass: 'btn-info btn-md waves-effect waves-light',
                confirmButtonText: 'Edit!'
            },
function(isConfirm){
  if (isConfirm) {
           $('#loading1').modal('show');
           //Ajax Load data from ajax
            $.ajax({
                url : "<?php echo base_url('pemesanan/edit/')?>/"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    save_method = "update";
                    $('#loading1').modal('hide');

                    $('[name="id_kamar"]').val(data.id_kamar);
                    $('[name="tanggal_pemesanan"]').val(data.tanggal_pemesanan);
                    $('[name="tanggal_masuk"]').val(data.tanggal_masuk);

                    $('[name="tanggal_keluar"]').val(data.tanggal_keluar);
                    $('[name="harga"]').val(data.harga);
                    // $('[name="tanggal_masuk"]').val(data.tanggal_masuk);
                    
                    
                    $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                    $('.modal-title').text('Edit'); // Set title to Bootstrap modal title

                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error getting data from ajax');
                }
            });
  }
});

    
}




 function acc(id){
   swal({
                title: "Apakah Anda Yakin?",
                text: "Konfirmasi Data ini",
                type: "warning",
                showCancelButton: true,
                cancelButtonClass: 'btn-default btn-md waves-effect',
                confirmButtonClass: 'btn-info btn-md waves-effect waves-light',
                confirmButtonText: 'Konfirmasi'
            },
function(isConfirm){
  if (isConfirm) {
            
             $.ajax({
		        url : "<?php echo base_url('pemesanan/acc/')?>"+id,
		        type: "POST",
		        data: $('#form_konfirmasi').serialize(),
		        dataType: "JSON",
		        success: function(data)
		        {
		        	$('#loading1').modal('hide');
		        	swal({
		                        title: "Konfirmasi",
		                        text: "Data Berhasil Di Konfirmasi",
		                        type: "success",
		                        confirmButtonClass: 'btn-primary btn-md waves-effect waves-light',
		                        confirmButtonText: 'Oke'
		                    },
		                    function(isConfirm){
		                        if (isConfirm) {
		                            window.location.href='<?php echo base_url("pemesanan/"); ?>';
		                        }
		                    });
		        },
		        error: function (jqXHR, textStatus, errorThrown)
		        {
		           alert('error');

		        }
		    });
  }
});

}
</script>
<?php echo $this->endSection(); ?>