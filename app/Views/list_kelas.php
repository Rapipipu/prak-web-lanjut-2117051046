<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="<?= base_url('/user')?>" style="font-size : 25px;">User</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="<?= base_url('/kelas')?>" style="font-size : 25px;">Kelas</a>
    </li>
</ul>
<center><h1>Kelas</h1></center>
<a href="<?= base_url('/kelas/create') ?>"><Button class="btn btn-primary" style="margin-top : 20px; margin-left : 20px; margin-bottom : 30px;">Tambah Data</Button></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
            $no = 1;
            foreach ($kelass as $kelas){
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $kelas['nama_kelas'] ?></td>
                <td>
                    <a href="<?= base_url('/kelas/' . $kelas['id'] . '/edit') ?>" class="btn btn-warning">Edit</a>
                    <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="post" style="margin-top : 5px;">
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