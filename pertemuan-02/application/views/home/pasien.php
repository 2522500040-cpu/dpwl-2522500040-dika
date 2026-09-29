<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <h1>Data Profil Pasien</h1>
    <ul>
        <li><strong>NIK:</strong> <?= $nik; ?></li>
        <li><strong>NAMA:</strong> <?= $nama; ?></li>
    </ul>

    <a href="<?= site_url(); ?>">Kembali ke Beranda</a>
</body>
</html>