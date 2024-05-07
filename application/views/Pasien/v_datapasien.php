<section class="konten mt-2">
    <div class="contrainer-fluid">
        <div class="card border-primary">
            <div class="card-header">
                <?= $title; ?>
                <a href="<?= base_url('pasien/tambah'); ?>" class="btn btn-light btn-sm float-right" >Tambah Pasien</a>
            </div>
            <div class="card-body text-primary">
            <div class="table-responsive">
            <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nomor Riwayat Medis</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Golongan Darah</th>
      <th scope="col">Kode Agama</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach($pasien as $r){ ?>
    <tr>
      <th scope="row"><?= $no; ?> </th>
      <td><?= $r['nomor_rm']; ?></td>
      <td><?= $r['nm_pasien']; ?></td>
      <td><?= $r['jns_kelamin']; ?></td>
      <td><?= $r['gol_darah']; ?></td>
      <td><?= $r['kd_agama']; ?></td>
      <td><?= $r['tempat_lahir']; ?></td>
      <td><?= $r['tanggal_lahir']; ?></td>
      <td><?= $r['no_telepon']; ?></td>
      <td><?= $r['alamat']; ?></td>
      <td>Edit | Hapus </td>
    </tr>
    <?php $no++; } ?>

  </tbody>
</table>
 
    </div>

       
        </div>
    </div>
</section>