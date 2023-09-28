<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

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
</body>
</html>




