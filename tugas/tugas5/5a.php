<?php

$mahasiswa = [
    [
        "nama" =>    "Farid Hudaloh",
        "nrp" =>    "232040052",
        "email" => "faridhdl@gmail.com",
        "semester" => "2",
        "gambar" => "foto1.jpeg"

    ],
    [
        "nama" =>    "Zidan maulna",
        "nrp" =>    "24203343",
        "email" =>  "zidanmaul@gmail.com",
        "semester" => "1",
        "gambar"  => "foto2.jpeg"

    ],
    [
        "nama" =>    "Deni Firman",
        "nrp" =>    "235267766",
        "email" =>  "deni12@gmail,com",
        "semester" => "3",
        "gambar" => "foto3.jpeg"

    ],
    [
        "nama" =>    "Bagas prakoso",
        "nrp" =>    "235262561",
        "email" =>  "bagaskos24@gmail.com",
        "semester" => "5",
        "gambar" => "foto4.jpeg"

    ],
    [
        "nama" =>    "Bayu setiawan",
        "nrp" =>    "234452187",
        "email" =>  "setiawanbay44@gamil.com",
        "semester" => "7",
        "gambar" => "foto5.jpeg"

    ],
    [
        "nama" =>    "ismail fauzi",
        "nrp" =>    "234455422",
        "email" =>  "fauzimail@gmail.com",
        "semester" => "3",
        "gambar" => "foto6.jpeg"

    ],
    [
        "nama" =>    "Maman abduloh",
        "nrp" =>    "243554411",
        "email" =>  "manduloh122@gail.com",
        "semester" => "5",
        "gambar" => "foto7.jpeg"

    ],
    [
        "nama" =>    "Hilmansyah saputra",
        "nrp" =>    "23445541",
        "email" =>  "hilmansyah@gmail.com",
        "semester" => "6",
        "gambar" => "foto8.jpeg"

    ],
    [
        "nama" =>    "Tegu sugiatno",
        "nrp" =>    "23255241",
        "email" =>  "teguhsugiat01@gmail.com",
        "semester" => "2",
         "gambar" => "foto9.jpeg"

    ],
    [
        "nama" =>    "Muhamad Tedy",
        "nrp" =>    "2431422",
        "email" =>  "tedymad33@gmail.com",
        "semester" => "3",
         "gambar" => "foto10.jpeg"
    ],

]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Mahasiswa tekinik informatika unpas</h1>
<body>
  <?php foreach( $mahasiswa as $mahasiswa ) :?>
        
    <ul>
    <li>
        <img src="img/<?= $mahasiswa["gambar"]; ?>">
    </li>
        <li>Nama : <?= $mahasiswa["nama"]; ?></li>
        <li>NRP : <?= $mahasiswa["nrp"]; ?></li>
        <li>Email : <?= $mahasiswa["email"]; ?></li>
        <li>Semester : <?= $mahasiswa["semester"]; ?></li>
    
  </ul>

    <?php endforeach; ?>
    
</body>
</html>