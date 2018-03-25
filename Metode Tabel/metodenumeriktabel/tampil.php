<?php 
// Fungsi persamaan
function persamaan($p)
{
      return pow(M_E,-$p)-$p;
}

// Pengambilan nilai dari form input
$a = isset($_POST['submit'])?$_POST['a']:0;
$b = isset($_POST['submit'])?$_POST['b']:0;
$iterasi = isset($_POST['submit'])?$_POST['iterasi']:0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./Bootstrap/bootstrap.css">
    <title>Metode Tabel</title>
    <style>
    .footer {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1rem;
        background-color: #efefef;
        text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php

            if($iterasi>0)
            {
            // Perhitungan x dan persamaan f(x)
            $x=($a-$b)/$iterasi;
            $fb=persamaan($b);
            {
            ?>
                        <h1 class="text-center">Metode Tabel</h1>
                        <h4 class="text-center"> f(x) = e<sup>-x</sup> - x </h4>
                        <table class="table table-striped">
                            <tr>
                                <td align="center">
                                    <strong>Iterasi</strong>
                                </td>
                                <td align="center">
                                    <strong>x</strong>
                                </td>
                                <td align="center">
                                    <strong>f(x)</strong>
                                </td>
                            </tr>
                            <?php 

                for($k=0;$k<=$iterasi;$k++)
                    {
                    // Pengulangan untuk menampilkan data ke tabel
                    $fb = persamaan($b);
                    // Penyimpanan variabel ke dalam array
                    $array1[] = $b;
                    $array2[] = $fb;
            ?>
                            <tr>
                                <td align="center">
                                    <?php echo $k;?>
                                </td>
                                <td align="center">
                                    <?php echo number_format($b,4,",",".");?>
                                </td>
                                <td align="center">
                                    <?php echo number_format($fb,4,",",".");?>
                                </td>
                            </tr>

                            <?php
                            $b = $b + $x;
                    }
            ?>
                        </table>
                        <?php
                        for($i=1;$i<=$iterasi;$i++)
                        {
                        // Mencari akar akar dengan pemutlakkan dan ternary operator
                           if($array2[$i]*$array2[$i+1] <= 0) {
                               $absa = abs($array2[$i]);
                               $absb = abs($array2[$i+1]);
                               $hasil = $absa < $absb ? $array1[$i] : $array1[$i+1];
                        ?>
                        <div class="alert alert-info text-center h1"> Akarnya adalah <?php echo $hasil; ?></div>
                        <?php
                            break;
                           }
                        }
                    }
                }
                error_reporting(0);
            ?>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
