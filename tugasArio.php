<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS</title>
    <style>
        table{
            margin: 20% auto;
        }
        table tr td{
            border: 1px solid black;
            padding: 0 10px;
        }
        .mhs,.em{
            color: darkcyan;
        }
        body{
            text-align: center;
        }
        
    </style>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>NIM</td>
            <td>Jurusan</td>
            <td>Email</td>
            <td>Nilai</td>
            <td>Status</td>
        </tr>
        <?php
        $mhs = "Rizky";
        $nim = "123456";
        $jrs = "TI";
        $mail = "Rizky@gmail.com";
        $nilai = [90, 60, 80];
        ?>

        <?php for($i = 0; $i<=2;) {?>
        <tr>
            <td class="mhs"><a href=""></a><?php echo $mhs; ?></td>
            <td><?php echo $nim; ?></td>
            <td><?php echo $jrs; ?></td>
            <td class="em"><u><?php echo $mail; ?></u></td>
            <td><?php echo $nilai[$i]; ?></td>

            <?php if($nilai[$i] >= 70){
                    $sts = "Lulus";
                } elseif($nilai[$i] <= 69){
                    $sts = "Tidak Lulus";
                } else{
                    $sts = "Nilai tidak valid";} 
            ?>
            <td><?php echo $sts?></td>

        <?php $i++;} ?> 
        </tr>
    </table>
</body>
</html>