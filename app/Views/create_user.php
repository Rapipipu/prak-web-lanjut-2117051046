<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
    <form action="<?= base_url('/user/store') ?>" method="POST" style="margin-left : 800px; margin-top : 320px">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Nama</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="nama">
            </div>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">NPM</label>
            </div>
            <div class="col-auto" style="margin-left : 7px; margin-top : 30px;">
                <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="npm">
            </div>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Kelas</label>
            </div>
            <div class="col-auto" style="margin-left : 6px; margin-top : 30px;">
                <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="kelas">
            </div>
        </div>

        <input type="submit" class="btn btn-success" style="margin-left : 100px; margin-top : 30px;">
    </form>
</body>
</html>




