<div class="controller px-3">
    <form action="<?= site_url('welcome/AddDataSiswa') ?>" method="post">
        <div class="form-group row">
            <label for="nis" class="col-sm-2 col-form-label">NIS</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>