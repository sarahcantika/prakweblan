<?= $this->extend('templates/template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <form action="/store" method="POST">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="text" name="npm" class="form-control" id="npm">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat">
                </div>
            </div>
            <div class="col-6">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-palene"></i>Submit</button>
    </form>
</div>
<?= $this->endSection() ?>
