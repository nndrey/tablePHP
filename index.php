<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Таблица истинности PHP</h1>
        <table><tr>
        <th>A</th>
        <th>B</th>
        <th>!A</th>
        <th>A || B</th>
        <th>A && B</th>
        <th>A xor B</th>
    </tr>
    <tr>
        <td><strong>0</strong></td>
        <td><strong>0</strong></td>
        <td> <?php $a = 0; if(!$a) { echo '1';} ?> </td>
        <td> <?php $a = 0; $b = 0; if($a||$b) { echo '1';} else {echo '0';} ?> </td>
        <td> <?php $a = 0; $b = 0; if($a && $b) { echo '1';} else {echo '0';} ?> </td>
        <td> <?php $a = 0; $b = 0; if($a xor $b) { echo '1';} else {echo '0';} ?> </td>
    </tr>
    <tr>
        
        <td><strong>0</strong></td>
        <td><strong>1</strong></td>
        <td><?php $a = 0; if(!$a) { echo '1';} ?></td>
        <td><?php $a = 0; $b = 1; if($a||$b) { echo '1';} else {echo '0';} ?></td>
        <td><?php $a = 0; $b = 1; if($a && $b) { echo '1';} else {echo '0';} ?></td>
        <td><?php $a = 0; $b = 1; if($a xor $b) { echo '1';} else {echo '0';} ?></td>
    </tr>
    <tr>
        <td><strong>1</strong></td>
        <td><strong>0</strong></td>
        <td><?php $a = 1; if(!$a) { echo '1';} else {echo '0';} ?></td>
        <td><?php $a = 1; $b = 0; if($a||$b) { echo '1';} else {echo '0';} ?></td>
        <td><?php $a = 1; $b = 0; if($a && $b) { echo '1';} else {echo '0';} ?></td>
        <td><?php $a = 1; $b = 0; if($a xor $b) { echo '1';} else {echo '0';} ?></td>
    </tr>
    <tr>
        <td><strong>1</strong></td>
        <td><strong>1</strong></td>
        <td><?php $a = 1; if(!$a) { echo '1';} else {echo '0';} ?></td>
        <td><?php $a = 1; $b = 1; if($a||$b) { echo '1';} else {echo '0';} ?></td>
        <td><?php $a = 1; $b = 1; if($a && $b) { echo '1';} else {echo '0';} ?></td>
        <td><?php $a = 1; $b = 1; if($a xor $b) { echo '1';} else {echo '0';} ?></td>
    </tr>
    </table>
    <h1>Гибкое сравнение в PHP "=="</h1>
    <table>
        <tr>
        <th></th>  
        <th>true</th>
        <th>false</th>
        <th>1</th>
        <th>0</th>
        <th>-1</th>
        <th>"1"</th>
        <th>null</th>
        <th>"php"</th>
    </tr>
    <tr>
        <th>true</th>
        <td><?php $a = true; $b = true; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = true; $b = false; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = true; $b = 1; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = true; $b = 0; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = true; $b = -1; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = true; $b = "1"; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = true; $b = null; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = true; $b = "php"; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
    </tr>
    <tr>
        <th>false</th>
        <td><?php $a = false; $b = true; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = false; $b = false; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = false; $b = 1; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = false; $b = 0; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = false; $b = -1; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = false; $b = "1"; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = false; $b = null; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = false; $b = "php"; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
    </tr>
    <tr>
        <th>1</th>
        <td><?php $a = 1; $b = true; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 1; $b = false; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 1; $b = 1; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 1; $b = 0; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 1; $b = -1; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 1; $b = "1"; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 1; $b = null; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 1; $b = "php"; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
    </tr>
    <tr>
        <th>0</th>
        <td><?php $a = 0; $b = true; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 0; $b = false; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 0; $b = 1; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 0; $b = 0; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 0; $b = -1; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 0; $b = "1"; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 0; $b = null; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 0; $b = "php"; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
    </tr>
    <tr>
        <th>-1</th>
        <td><?php $a = -1; $b = true; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = -1; $b = false; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = -1; $b = 1; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = -1; $b = 0; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = -1; $b = -1; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = -1; $b = "1"; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = -1; $b = null; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = -1; $b = "php"; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
    </tr>
    <tr>
        <th>"1"</th>
        <td><?php $a = "1"; $b = true; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "1"; $b = false; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "1"; $b = 1; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "1"; $b = 0; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "1"; $b = -1; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "1"; $b = "1"; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "1"; $b = null; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "1"; $b = "php"; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
    </tr>
    <tr>
        <th>null</th>
        <td><?php $a = null; $b = true; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = null; $b = false; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = null; $b = 1; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = null; $b = 0; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = null; $b = -1; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = null; $b = "1"; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = null; $b = null; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = null; $b = "php"; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
    </tr>
    <tr>
        <th>"php"</th>
        <td><?php $a = "php"; $b = true; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "php"; $b = false; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "php"; $b = 1; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "php"; $b = 0; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "php"; $b = -1; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "php"; $b = "1"; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "php"; $b = null; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "php"; $b = "php"; if($a==$b) { echo 'true';} else {echo 'false';} ?></td>
    </tr>
    </table>
    <h1>Жёсткое сравнение в PHP "==="</h1>
    <table>
        <tr>
        <th></th>  
        <th>true</th>
        <th>false</th>
        <th>1</th>
        <th>0</th>
        <th>-1</th>
        <th>"1"</th>
        <th>null</th>
        <th>"php"</th>
    </tr>
    <tr>
        <th>true</th>
        <td><?php $a = true; $b = true; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = true; $b = false; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = true; $b = 1; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = true; $b = 0; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = true; $b = -1; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = true; $b = "1"; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = true; $b = null; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = true; $b = "php"; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
    </tr>
    <tr>
        <th>false</th>
        <td><?php $a = false; $b = true; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = false; $b = false; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = false; $b = 1; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = false; $b = 0; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = false; $b = -1; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = false; $b = "1"; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = false; $b = null; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = false; $b = "php"; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
    </tr>
    <tr>
        <th>1</th>
        <td><?php $a = 1; $b = true; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 1; $b = false; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 1; $b = 1; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 1; $b = 0; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 1; $b = -1; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 1; $b = "1"; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 1; $b = null; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 1; $b = "php"; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
    </tr>
    <tr>
        <th>0</th>
        <td><?php $a = 0; $b = true; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 0; $b = false; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 0; $b = 1; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 0; $b = 0; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 0; $b = -1; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 0; $b = "1"; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 0; $b = null; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = 0; $b = "php"; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
    </tr>
    <tr>
        <th>-1</th>
        <td><?php $a = -1; $b = true; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = -1; $b = false; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = -1; $b = 1; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = -1; $b = 0; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = -1; $b = -1; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = -1; $b = "1"; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = -1; $b = null; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = -1; $b = "php"; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
    </tr>
    <tr>
        <th>"1"</th>
        <td><?php $a = "1"; $b = true; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "1"; $b = false; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "1"; $b = 1; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "1"; $b = 0; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "1"; $b = -1; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "1"; $b = "1"; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "1"; $b = null; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "1"; $b = "php"; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
    </tr>
    <tr>
        <th>null</th>
        <td><?php $a = null; $b = true; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = null; $b = false; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = null; $b = 1; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = null; $b = 0; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = null; $b = -1; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = null; $b = "1"; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = null; $b = null; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = null; $b = "php"; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
    </tr>
    <tr>
        <th>"php"</th>
        <td><?php $a = "php"; $b = true; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "php"; $b = false; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "php"; $b = 1; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "php"; $b = 0; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "php"; $b = -1; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "php"; $b = "1"; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "php"; $b = null; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
        <td><?php $a = "php"; $b = "php"; if($a===$b) { echo 'true';} else {echo 'false';} ?></td>
    </tr>
    </table>
    <p>
        <span>Вывод:</span>
        самое важное отличие заключается в том, <br>
        что метод гибкого сравнения сравнивает <br>
        значения двух операндов. <br>
        Напротив, метод жесткого сравнения <br>
        сравнивает значение и тип операндов.
    </p>
</body>
</html>