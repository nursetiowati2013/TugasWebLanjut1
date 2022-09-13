<div class ="p-4">
    <a href="/create" type="button" class="btn btn-dark mb-3" >Tambah </a>
    <table class="table table-striped ">
    <thead  >
        <tr class="table-info">
        <th scope="col">Number</th>
        <th scope="col">NPM</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Created At</th>
        </tr>
    </thead>
    <tbody class="table-secondary">
        <?php $no = 1; ?>
        <?php foreach($mahasiswa as $mhs) : ?>
        <tr>
        <th scope="row"><?= $no ?></th>
        <td><?= $mhs['npm'] ?></td>
        <td><?= $mhs['nama'] ?></td>
        <td><?= $mhs['alamat'] ?></td>
        <td><?= $mhs['created_at'] ?></td>
        </tr>
        <?php $no++; endforeach;?>
    </tbody>
    </table>
</div>