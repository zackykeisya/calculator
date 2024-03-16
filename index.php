<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Kalkulator PHP</title>
<style>
    table {
        border-collapse: collapse;
    }
    td, th {
        border: 1px solid black;
        padding: 5px;
    }
    button {
        padding: 5px 10px;
        font-size: 16px;
        margin-right: 5px;
    }
</style>
</head>
<body>

<center><form action="" method="POST">
    <table>
        <tr>
            <td><label for="angka_pertama">Angka Pertama : </label></td>
            <td><input type="number" name="num1" id="angka_pertama"></td>
        </tr>
        <tr>
                <td><label for="operator">Operator : </label></td>
                <td>
                    <select name="operator" id="operator">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">x</option>
                        <option value="/">÷</option>
                    </select>
                </td>
            </tr>
        <tr>
            <td><label for="angka_pangkat">Angka Kedua : </label></td>
            <td><input type="number" name="num2" id="angka_pangkat"></td>
        </tr>
        
            <tr>
                <td colspan="2"><center><button type="submit">Hitung</button></center></td>
            </tr>
    </table>
</form>
<div class="result-container">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];
    if(empty($num1) || empty($num2)) {
        echo "<p style='text-align: center; color: red; margin: 10px 0'>Silahkan lengkapi seluruh data!</p>";
    } else {
        if ($operator == "+") {
            $result = $num1 + $num2;
            echo "<p style='text-align: center; color: green; margin: 10px 0'>Hasil penjumlahan: $result</p>";
        } elseif ($operator == "-") {
            $result = $num1 - $num2;
            echo "<p style='text-align: center; color: green; margin: 10px 0'>Hasil pengurangan: $result</p>";
        } elseif ($operator == "*") {
            $result = $num1 * $num2;
            echo "<p style='text-align: center; color: green; margin: 10px 0'>Hasil perkalian: $result</p>";
        } elseif ($operator == "/") {
            if ($num2 == 0) {
                echo "<p style='text-align: center; color: green; margin: 10px 0'>Angka kedua tidak boleh nol</p>";
            } else {
                $result = $num1 / $num2;
                echo "<p style='text-align: center; color: green; margin: 10px 0'>Hasil pembagian: $result</p>";
            }
        }
    }
}
?>

</div>

</body>
</html>
