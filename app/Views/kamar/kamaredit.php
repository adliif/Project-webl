<?php echo $this->extend('layout/template') ?>
<?php echo $this->section('content'); ?>
<div class="container">
    <p>Edit Detail Kamar Hotel</p>
    <form action="<?= base_url('updateKamarstaff/' . $kamar['id']) ?>" method="post" class="form-horizontal pad-bg">
      <h1 class="text-center">Edit Kamar</h1>
      <br>
      <div class="form-group">
        <label for="nama_kamar" class="control-label col-sm-3">Nama Kamar</label>
        <div class="col-sm-9">
          <input type="text" name="nama_kamar" class="form-control input-lg" value="<?= $kamar['nama_kamar'] ?>" />
        </div>
      </div>
      <div class="form-group">
    <label for="type_kamar" class="control-label col-sm-3">Type Kamar</label>
    <div class="col-sm-9">
        <select name="type_kamar" class="form-control input-lg" required>
            <?php foreach ($jenis_kamar as $jenis) : ?>
                <option value="<?= $jenis['id']; ?>" <?= ($jenis['id'] == $kamar['type_kamar']) ? 'selected' : ''; ?>>
                    <?= $jenis['type_kamar']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
</div>

<!-- Status -->
<div class="form-group">
    <label for="status" class="control-label col-sm-3">Status</label>
    <div class="col-sm-9">
        <select name="status" class="form-control input-lg" required>
            <?php foreach ($status_kamar as $status) : ?>
                <option value="<?= $status['id']; ?>" <?= ($status['id'] == $kamar['status']) ? 'selected' : ''; ?>>
                    <?= $status['status']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="harga" class="control-label col-sm-3">Harga</label>
    <div class="col-sm-9">
        <input type="text" name="harga" class="form-control input-lg" value="<?= $kamar['harga'] ?>" />
    </div>
</div>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>

  <?php echo $this->endSection(); ?>