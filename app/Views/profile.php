<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/profile.css');?>">
    <title>Document</title>
</head>
<body>

    <center>
            <table class="bio">
                <tr>
                    <td><p class="data"><img class="foto" src="<?= base_url('assets/img/foto.jpg'); ?>" alt="Foto"></p></td>
                </tr>   
                <tr>
                    <td><p class="data"><?php echo $nama ?></p></td>
                </tr>
                <tr>
                    <td><p class="data"><?php echo $kelas ?></p></td>
                </tr>
                <tr>
                    <td><p class="data"><?php echo $npm ?></p></td>
                </tr>
            </table>
    </center>

</body>
</html>