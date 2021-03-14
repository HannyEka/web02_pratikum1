<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nama_siswa = $_POST['name'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['uts'];
    $nilai_uas = $_POST['uas'];
    $nilai_tugas = $_POST['tugas'];

    $ns1 = ['nama' => 'Salma', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
    $ns2 = ['nama' => 'Kamila', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
    $ns3 = ['nama' => 'Aisyah', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
    $ns4 = ['nama' => 'Ilham', 'uts' => 90, 'uas' => 91, 'tugas' => 82];
    $ns5 = ['nama' => $nama_siswa, 'uts' => $nilai_uts, 'uas' => $nilai_uas, 'tugas' => $nilai_tugas];

    $ar_nilai = [$ns1, $ns2, $ns3, $ns4, $ns5];
    ?>
    <h3>Daftar Nilai Siswa</h3>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($ar_nilai as $ns) {
                echo '<tr><td>' . $nomor . '</td>';
                echo '<td>' . $ns['nama'] . '</td>';
                echo '<td>' . $ns['uts'] . '</td>';
                echo '<td>' . $ns['uas'] . '</td>';
                echo '<td>' . $ns['tugas'] . '</td>';
                $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
                echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                echo '<tr/>';
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>