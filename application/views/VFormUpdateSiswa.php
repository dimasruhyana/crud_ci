<div class="controller px-3">
    <form action="<?= site_url('welcome/UpdateDataSiswa') ?>" method="post">
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="hidden" name="nis" value="<?= $detail['nis'] ?>">
                <input type="text" class="form-control" name="nama" value="<?= $detail['nama'] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $detail['alamat'] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" name="btn_simpan" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>

</form>