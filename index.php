<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <h1 class="text-center mt-3">mudrolije.rs</h1>
    <a href="novamudrolija.php"><button class="btn btn-success" id="addbtn">Nova Mudrolija</button></a>

    <div class="sort">
        <img src="up-arrow.jpg" alt="" id="up-jpg" class="slike">
        <img src="down-arrow.jpg" alt="" id="down-jpg" class="slike">
    </div>

    <input type="text" class="form-control" id="naslov_user_pretraga">


    <div class="div-mudrolije">
        <!-- sve mudrolije -->
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="ajax.js"></script>
</body>

</html>