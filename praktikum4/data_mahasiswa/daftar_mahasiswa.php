<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <table width="100%" border="1">
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Tahun Angkatan</th>
            <th>IPK</th>
            <th>Predikat</th>
        </tr>
        <?php
        require_once ('class_mahasiswa.php');
        $mahasiswa1 = new Mahasiswa(02011, 'Faiz Fikri');
        $mahasiswa1->prodi = 'TI';
        $mahasiswa1->thn_angkatan = '2012';
        $mahasiswa1->ipk = 3.8;

        $mahasiswa2 = new Mahasiswa(02012, 'Alissa Khoirunisa');
        $mahasiswa2->prodi = 'TI';
        $mahasiswa2->thn_angkatan = '2012';
        $mahasiswa2->ipk = 3.9;

        $mahasiswa3 = new Mahasiswa(01011, 'Rosalie Naurah');
        $mahasiswa3->prodi = 'SI';
        $mahasiswa3->thn_angkatan = '2010';
        $mahasiswa3->ipk = 3.46;

        $mahasiswa4 = new Mahasiswa(01012, 'Defghi Muhammad');
        $mahasiswa4->prodi = 'SI';
        $mahasiswa4->thn_angkatan = '2010';
        $mahasiswa4->ipk = 3.2;

        $array_mahasiswa = [
            $mahasiswa1,
            $mahasiswa2,
            $mahasiswa3,
            $mahasiswa4,
        ];
        ?>
        <?php foreach ($array_mahasiswa as $key => $value) { ?>
        <tr>
            <td><?=$key+1?></td>
            <td><?=$value->nim?></td>
            <td><?=$value->nama?></td>
            <td><?=$value->prodi?></td>
            <td><?=$value->thn_angkatan?></td>
            <td><?=$value->ipk?></td>
            <td><?=$value->predikat_ipk()?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>