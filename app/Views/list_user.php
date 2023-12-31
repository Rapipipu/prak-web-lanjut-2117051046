<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?= base_url('/user')?>" style="font-size : 25px;">User</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/kelas')?>"style="font-size : 25px;">Kelas</a>
    </li>
</ul>

<center><h1>User</h1></center>
<a href="<?= base_url('/user/create') ?>"><Button class="btn btn-primary" style="margin-top : 20px; margin-left : 20px; margin-bottom : 30px;">Tambah Data</Button></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">NPM</th>
                <th scope="col">Kelas</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
            $no = 1;
            foreach ($users as $user){
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><img src="<?= $user['foto'] ?>" alt="Foto" width="150px"></td>
                <td><?= $user['nama'] ?></td>
                <td><?= $user['npm'] ?></td>
                <td><?= $user['nama_kelas'] ?></td>
                <td>
                    <a href="<?= base_url('user/' . $user['id']) ?>" class="btn btn-primary">Detail</a>
                    <a href="<?= base_url('/user/' . $user['id'] . '/edit') ?>" class="btn btn-warning">Edit</a>
                    <form action="<?= base_url('user/' . $user['id']) ?>" method="post" style="margin-top : 5px;">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button tupe="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
<?= $this->endSection()?>