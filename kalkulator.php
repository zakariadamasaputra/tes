<?php
//menampung hasil inputan dr string post
$angka1 = @$_POST['tangka1'];
$angka2 = @$_POST['tangka2'];
$hasil  = @$_POST['thasil'];

//buat pengujian jika tombol tambah di klik
if (isset($_POST['btambah'])) {
    $hasil = $angka1 + $angka2;
}
//buat pengujian jika tombol kurang di klik
if (isset($_POST['bkurang'])) {
    $hasil = $angka1 - $angka2;
}
//buat pengujian jika tombol bagi di klik
if (isset($_POST['bbagi'])) {
    $hasil = $angka1 / $angka2;
}
//buat pengujian jika tombol kali di klik
if (isset($_POST['bkali'])) {
    $hasil = $angka1 * $angka2;
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Kalkulator!</title>
</head>

<body>

    <br><br>
    <form action="" method="post">
        <table align="center" border="1" style="background-color: salmon;">
            <tr>
                <td colspan="3" class="text-center">
                    <h2>Kalkulator Sederhana</h2>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Angka 1</td>
                <td>:</td>
                <td><input type="number" name="tangka1" value="<?= $angka1 ?>" required></td>
            </tr>
            <tr>
                <td>Angka 2</td>
                <td>:</td>
                <td><input type="number" name="tangka2" value="<?= $angka2 ?>" required></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="btambah" value="+">
                    <input type="submit" name="bkurang" value="-">
                    <input type="submit" name="bbagi" value="/">
                    <input type="submit" name="bkali" value="*">
                </td>
            </tr>

            <tr>
                <td>Hasil</td>
                <td>:</td>
                <td><input type="number" name="thasil" value="<?= $hasil ?>"></td>
            </tr>
            <tr>
                <td><input type="reset" value="Reset"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
        </table>
    </form>





























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>