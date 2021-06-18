<?php
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        .form {
            padding-left: 30%;
            padding-right: 30%;
        }
    </style>
    <title>Daftar Program</title>
</head>
<body>
<h1 style="text-align: center">Daftar Program</h1>

<div class="form">
    <form class="row g-3">
        <div class="col-md-6">
            <label for="" class="form-label">Nama Lengkap</label>
            <input class="form-control" placeholder="" >
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Email</label>
            <input  class="form-control" >
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="jl.12 Bandung,Jawa Barat">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Status</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Mahasiswa">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">No.Telepon</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Jenis Program</label>
            <select id="inputState" class="form-select">
                <option selected>Pilih...</option>
                <option>Pelatihan</option>
                <option>Webinar</option>
            </select>
        </div>

        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary"><a style="text-decoration: None; color: white" href="../home/index.php">Daftar</a></button>
        </div>
    </form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
-->
</body>
</html>

