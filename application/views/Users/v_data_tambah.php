<section class="konten mt-2">
    <div class="contrainer-fluid">
        <div class="card border-primary">
            <div class="card-header">
                <?= $title; ?>
                <a href="<?= base_url('users'); ?>" class="btn btn-light btn-sm float-right" >kembali</a>

            </div>
            <div class="card-body text-primary">
            <div class="table-responsive">

            <form action="<?= base_url('Users/insert'); ?>" method="POST">
                <div class="form-group">
                <label for="exampleFormControlInput1">Ussername</label>
                <input type="text" name="ussername" id="" placeholder="">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Password</label>
                <input type="text" name="passsword" id="" placeholder="">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="" placeholder="">
            </div>

            <div class="form-group">
                <button type="submit" class="btn-primary btn-sm">Simpan Data</button>

            </form>

            </div>
        </div>
    </div>
</section>