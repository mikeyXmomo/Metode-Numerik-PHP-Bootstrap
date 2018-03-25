<?php 
include "tampil.php";
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
            <h1 class="text-center">Metode Tabel</h1>
            <h4 class="text-center"> f(x) = e<sup>-x</sup> - x </h4>
            <br>
            <div class="col-sm-4 col-sm-offset-4">
                <form action="tampil.php" method="POST">
                    <div class="form-group">
                        <label class="control-label" for="a">Masukkan Batas Atas</label>
                        <input type="text" class="form-control" name="a" id="a" placeholder="Nilai Batas Atas" aria-describedby="basic-addon1" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="control-label "for="b">Masukkan Batas Bawah</label>
                        <input type="text" class="form-control" name="b" id="b" placeholder="Nilai Batas Bawah" aria-describedby="basic-addon1" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="control-label" for="iterasi">Masukkan Iterasi</label>
                        <input type="text" class="form-control" name="iterasi" id="iterasi" placeholder="Nilai Iterasi" aria-describedby="basic-addon1" required>
                    </div>
                    <br>
                    <p>
                        <button type="submit" name="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
                        Do The Magic
                        </button>
                    </p>
                </form>
            </div>
            <div class="footer">Copyright &copy 2018 <strong>ILHAM ASSIDIQY BASORY</strong>.</div>
        </div>
    </div>
</body>
</html>