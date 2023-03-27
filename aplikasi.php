<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Kalkuator Sederhana</title>
</head>
<h1 align="left" style="font-size:20px;"><b>APLIKASI PERHITUNGAN MATEMATIKA VITA</b></h1>
<body>
    <form action="" method="POST">
        BILANGAN1: <br>
        <input type="number" name="angka_pertama"><br><br>
        BILANGAN 2: <br>
        <input type="number" name="angka_kedua"><br><br>
        TAMBAH: <br>
        <select name="operator" id="">
            <option value="">--pilih--</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <br><br>
        <input type="submit" value="Proses" name="submit">
    </form>
    <?php
        if($_POST['submit']){
            $angka_1 = $_POST['angka_pertama'];
            $angka_2 = $_POST['angka_kedua'];
            $operator = $_POST['operator'];
            if($operator == ''){
                echo 'Anda belum memilih operator';
                exit();
            }
            echo 'Angka pertama '.$angka_1.'<br/>';
            echo 'Angka Kedua '.$angka_2.'<br/>';
            echo 'Operator: '.$operator.'<br/>';
            echo '<hr/>';

            if($operator == '+'){
                $hasil = $angka_1 + $angka_2;
            }else if($operator == '-'){
                $hasil = $angka_1 - $angka_2;
            }else if($operator == '*'){
                $hasil = $angka_1 * $angka_2;
            }else if($operator == '/'){
                $hasil = $angka_1 / $angka_2;
            }else if($operator == '%'){
                $hasil = $angka_1 % $angka_2;
            }
            echo 'Hasilnya adalah '.$hasil;
        }
    ?>
</body>
</html>