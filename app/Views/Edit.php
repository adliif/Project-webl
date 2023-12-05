<?php echo $this->extend('layout/template') ?>

<?php echo $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">


<form method="post" action="<?= base_url('homestaff/update') ?>">
  <?php foreach ($list as $value): ?>
        <div class="row">
        	  <div class="col-md-12">
                   <div class="form-group">
                                             <label class="">Nama Staff</label>
                                               <input name="id_staff" id="id_staff" placeholder="Masukan Nama Staff" class="form-control d-none" type="text" value="<?php echo $value->id ?>">

                                            <input name="nama_staf" id="nama_staf" placeholder="Masukan Nama Staff" class="form-control" type="text" value="<?php echo $value->nama_staf ?>">
                                            <span class="help-block"></span>
					</div>
                </div>
        </div>

        <div class="row">
        	  <div class="col-md-12">
                   <div class="form-group">
                                             <label class="">Alamat Staff</label>
                                            <input name="alamat" id="alamat" placeholder="Masukan Alamat Staff" class="form-control" type="text" value="<?php echo $value->alamat ?>">
                                            <span class="help-block"></span>
					</div>
                </div>
        </div>

        <div class="row">
        	  <div class="col-md-12">
                   <div class="form-group">
                                             <label class="">No Telepon Staff</label>
                                            <input name="no_telepon" id="no_telepon" placeholder="Masukan No Telepon Staff" class="form-control" type="text" value="<?php echo $value->no_telepon ?>" >
                                            <span class="help-block"></span>
					</div>
                </div>
        </div>

    		
      </div>
      <hr>
      <div class="row">
        <!-- <button type="submit" class="btn btn-primary">Save changes</button> -->
        <button type="submit" class="btn btn-success">Update</button>
      </div>


  <?php endforeach ?>
      </form>

   </div>
        </div>
      </div>
    </div>

    <?php echo $this->endSection(); ?>