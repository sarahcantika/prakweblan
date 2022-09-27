<?= $this->extend('templates/template') ?>
<?= $this->section('content') ?>
<a type="button" class="btn btn-primary mb-3" href="/create"><i class="fa fa-plus"></i>Tambah</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NPM</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Created at</th>
            <th scope="col">Update at</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <th scope="row"><?= $no ?></th>
                <td><?= $mhs['npm'] ?></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['alamat'] ?></td>
                <td><?= $mhs['deskripsi'] ?></td>
                <td><?= $mhs['created_at'] ?></td>
                <td><?= $mhs['update_at'] ?></td>
                <td>
                    <div class="d-flex">
                        <a href="/edit/<?= $mhs['id'] ?>" class="btn btn-warning mr-3"><i class="fa fa-edit"></i>Edit</a>
                        <form action="/delete/<?= $mhs['id'] ?>" method="post">
                            <input name="_method" value="DELETE" type="hidden">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button>
                        </form>
                </td>
            </tr>
        <?php $no++;
        endforeach ?>
    </tbody>
</table>
<?= $this->endSection() ?>
