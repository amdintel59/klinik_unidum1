<section class="konten mt-2">
    <div class="contrainer-fluid">
        <div class="card border-primary">
            <div class="card-header">
                <?= $title; ?>
                <a href="<?= base_url('users/tambah'); ?>" class="btn btn-light btn-sm float-right" >Tambah User</a>
            </div>
            <div class="card-body text-primary">
            <div class="table-responsive">
            <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach($users as $r){ ?>
    <tr>
      <th scope="row"><?= $no; ?> </th>
      <td><?= $r['id']; ?></td>
      <td><?= $r['ussername']; ?></td>
      <td><?= $r['nama_lengkap']; ?></td>
      <td>
        <a href="<?= base_url(). 'users/edit/'.$r['id']; ?>"
        class= "btn btn-warning btn-sm"> Edit</a>

        <a href="<?= base_url(). 'users/edit'.$r['id']; ?>"
        class= "btn btn-danger btn-sm" onClick="retun confirm ('yakin akan menghapus data ?') ">Hapus </a>

      </td>
    </tr>
    <?php $no++; } ?>

  </tbody>
</table>
 
    </div>

       
        </div>
    </div>
</section>