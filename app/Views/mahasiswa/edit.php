<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
<div class="p-4">
    <div class="row">
        <div class="col-6">
            <form action="/update/<?= $mahasiswa['id'] ?>" method="POST">

                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="text" name="npm" class="form-control" id="npm" value="<?= $mahasiswa['npm'] ?>">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama'] ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $mahasiswa['alamat'] ?>">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?= $mahasiswa['deskripsi'] ?>"> </textarea>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
        <div class="col-6">


        </div>
    </div>
</div>

<?= $this->endSection(); ?>