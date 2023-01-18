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
    <form method="post" class="text-center" id="addform">

        <div class="form ">
            <label class="form-label">Naslov: </label>
            <input type="text" class="form-control text-center" name="naslov">
        </div>


        <div class="form">
            <label class="form-label">Sadržaj: </label>
            <textarea class="form-control text-center" name="sadrzaj" rows="8"></textarea>
        </div>


        <div class="form">
            <label class="form-label">User: </label>
            <select class="form-select text-center" name="user">
                <?php
                $sql_upit = "select * from user";
                $host = "localhost";
                $username = "root";
                $password = "";
                $baza = "mudrolije";
                $connection = new mysqli($host, $username, $password, $baza) or die("Connection failed: %s\n" . $connection->error);
                $query_result = $connection->query($sql_upit);


                while ($user = mysqli_fetch_array($query_result)) :
                ?>
                    <option class="text-center" value="<?php echo $user['id']; ?>">
                        <?php echo $user['username']; ?>
                    </option>

                <?php endwhile; ?>
            </select>
        </div>

        <button type="submit" name="btn" class="btn btn-success mt-2">Dodaj</button>

        <?php
        include('OOP/mudrolija.php');

        if (isset($_POST['btn'])) {
            $mudrolija = new Mudrolija();
            if ($mudrolija->dodaj($_POST['naslov'], $_POST['sadrzaj'], $_POST['user'])) {
                echo '<script type="text/JavaScript"> 
                    alert("Bravo - dodali ste mudroliju!")
                    </script>';
            } else {
                echo '<script type="text/JavaScript"> 
                    alert("Greška!")
                    </script>';
            }
        }
        ?>
    </form>
</body>

</html>