<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tugas praktikum OOP</title>
<style>
body {
    padding: 20px 20%;
}
form {
    padding: 10px 20px;
    background-color: blue;
    border: solid thin #EEE;
}
input, select {
    padding: 6px 12px;
}
.hasil {
    padding: 10px 20px;
    background-color: blue;
    color: #FFF;
    border: solid thin #600;
}
</style>
</head>

<body>
<h2 align="center">Hasil Anda</h2>
<?php
// Action form
if (isset($_GET['submit'])) {
    // Input form
    $nama        = $_GET['nama'];
    $kelamin    = $_GET['kelamin'];
    $umur    = $_GET['umur'];
    $tb            = $_GET['tb']/100;
    $bb            = $_GET['bb'];
    $bmi        = $bb / ($tb * $tb);
   
    echo "<h4>Hasil:</h4>";
 
    if($bmi < 15.5) {
        echo "Anda mengalami anoreksia";
    }elseif ($bmi < 18.5 ) {
        echo "Anda mengalami kekurangan gizi";
    }elseif ($bmi < 25 ) {
        echo "Anda memiliki berat badan normal";
    }elseif ($bmi < 30 ) {
        echo "Anda memiliki overweight";
    }elseif ($bmi < 35 ) {
        echo "Anda mengalami Obesitas Level 1";
    }elseif ($bmi < 40 ) {
        echo "Anda mengalami Obesitas Level 2";
    }else {
        echo "Anda mengalami Obesitas Akut";
    }
   
    echo '</div>';
}
?>

<table width="100%" bgcolor="silver" cellspacing="4">
 <tr bgcolor="lightblue">
 <th width="100">Nama</th>
 <th>Jenis Kelamin</th>
 <th width="100">umur</th>
 <th width="100">Tinggi Badan(cm)</th>
 <th width="100">Berat badan(kg)</th>
 <th width="100">BMI</th>
 
 </tr>

<tr bgcolor="white">
 <td><?php echo $nama ;?></td>
 <td><?php echo $kelamin;?></td>
 <td><?php echo $umur;?></td>
 <td><?php echo $tb ;?></td>
 <td><?php echo $bb;?></td>
 <td><?php echo $bmi;?></td>

 </tr>
</table>

</body>
</html>

