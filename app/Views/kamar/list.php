<?php echo $this->extend('layout/template') ?>
<?php echo $this->section('content'); ?>

<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- <span class="breadcrumb"><a href="#">Home</a>  /  Staf</span> -->
          <h3>Data Kamar</h3>
        </div>
      </div>
    </div>
  </div>
</br>
  <div class="container">
  <p> Daftar Staf Hotel </p>
</br>

<table class="table" border="1" id="table" 
     data-toggle="table"
     data-search="true"
     data-filter-control="true" 
     data-show-export="true"
     data-click-to-select="true"
     data-toolbar="#toolbar">
	<thead>
		<tr>
			<th data-field="prenom" data-filter-control="input" data-sortable="true">Nama Kamar</th>
			<th data-field="date" data-filter-control="select" data-sortable="true">Type Kamar</th>
			<th data-field="examen" data-filter-control="select" data-sortable="true">Status</th>
      <th data-field="examen" data-filter-control="select" data-sortable="true">Harga</th>
      <th class="edit-column">Aksi</th>
		</tr>
	</thead>
	<tbody>
    <?php foreach ($kamar as $kamar) : ?>
        <tr>
            <td><?= $kamar['nama_kamar']; ?></td>
            <td><?= $kamar['type_kamar_name']; ?></td>
            <td><?= $kamar['status_name']; ?></td>
            <td><?= $kamar['harga']; ?></td>
            <td>
            <div class="btn-group">
        <a type="button" class="btn btn-warning btn-edit" href="<?= base_url('kamareditstaff/' . $kamar['id']) ?>">Edit</a>
        &nbsp;
        <form action="<?= base_url('kamarstaff/delete/' . $kamar['id']) ?>" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kamar ini?')">Hapus</button>
        </form>
    </div>
                    </td>
            </tr>
        <?php endforeach; ?>
			</td>
		</tr>
		
	</tbody>
</table>
<a type="button" class="btn btn-primary" href="<?= base_url('kamartambahstaff') ?>">Tambah</a>

</div>

<style>
    .edit-column {
        width: 150px; /* Sesuaikan lebar sesuai kebutuhan */
    }

    .btn-group {
        display: flex;
        gap: 5px; /* Sesuaikan jarak sesuai kebutuhan */
    }
</style>

<script>
    function confirmDelete(stafId) {
        if (confirm("Are you sure you want to delete this staf?")) {
            window.location.href = '<?= base_url('owner/deleteStaf/') ?>' + stafId;
        }
    }
</script>
<?php echo $this->endSection(); ?>