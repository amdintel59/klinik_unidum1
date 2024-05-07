<section class="konten mt-2">
    <div class="contrainer-fluid">
        <div class="card border-primary">
            <div class="card-header">
                <?= $title; ?>
                <a href="<?= base_url('dokter/tambah'); ?>" class="btn btn-light btn-sm float-right" >Tambah Dokter</a>
            </div>
            <div class="card-body text-primary">
            <div class="table-responsive">
            <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">kode dokter</th>
      <th scope="col">Nama dokter</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach($dokter as $r){ ?>
    <tr>
      <th scope="row"><?= $no; ?> </th>
      <td><?= $r['kd_dokter']; ?></td>
      <td><?= $r['nm_dokter']; ?></td>
      <td><?= $r['jns_kelamin']; ?></td>
      <td><?= $r['alamat']; ?></td>
      <td><?= $r['no_telepon']; ?></td>
      <td>Edit | Hapus </td>
    </tr>
    <?php $no++; } ?>

  </tbody>
</table>
 
    </div>

       
        </div>
    </div>
</section>