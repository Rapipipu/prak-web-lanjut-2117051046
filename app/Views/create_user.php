<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
    <h1 style="margin-top:30px;">Form Tambah User</h1>
    <form action="<?= base_url('/user/store') ?>" method="POST" style="margin-top:50px;">
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="inputPassword" name="nama" value="<?= old('nama'); ?>">
                <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                    <div class="invalid-feedback">
                        <?= session('validation')->getError('nama'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">NPM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('npm') ? 'is-invalid' : '' ?>" id="inputPassword" name="npm" value="<?= old('npm'); ?>">
                <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
                    <div class="invalid-feedback">
                        <?= session('validation')->getError('npm'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Small select example" name="kelas" value="<?= old('kelas'); ?>">
                    <option selected>Pilih Kelas</option>
                        <?php
                        foreach ($kelas as $item) {?>
                            <option value="<?= $item['id'] ?>">
                                <?= $item['nama_kelas'] ?>
                            </option>
                        <?php
                        }
                        ?>
                </select>
            </div>
        </div>

        <input type="submit" class="btn btn-success">
    </form>
<?= $this->endSection()?>




