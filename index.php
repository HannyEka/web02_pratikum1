<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Form Nilai Siswa</h1>
    <fieldset>
        <legend>Tambah Data</legend>
        <form action="array_siswa.php" method="POST">
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" name="name" id=""></td>
                </tr>
                <tr>
                    <td>Mata Kuliah</td>
                    <td>
                        <select name="matkul" id="">
                            <option value="DDP">Dasar-Dasar Pemrograman</option>
                            <option value="BDI">Basis Data I</option>
                            <option value="WEB1">Pemrograman Web</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td><input type="text" name="uts" id=""></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td><input type="text" name="uas" id=""></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td><input type="text" name="tugas" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Kirim"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>