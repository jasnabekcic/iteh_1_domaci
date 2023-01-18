 <?php

    $up_or_down = $_POST['up_or_down'];
    if ($up_or_down == 'up-jpg')
        $up_or_down = 'asc';
    else
        $up_or_down = 'desc';


    $sql_upit = "select mudrolija.id, mudrolija.naslov, mudrolija.sadrzaj, user.username from mudrolija join user on mudrolija.user_id=user.id order by naslov " . $up_or_down;
    $host = "localhost";
    $username = "root";
    $password = "";
    $baza = "mudrolije";
    $connection = new mysqli($host, $username, $password, $baza) or die("Connection failed: %s\n" . $connection->error);
    $query_result = $connection->query($sql_upit);


    while ($red = mysqli_fetch_array($query_result)) :
    ?>

     <div class="card">
         <img src="slika.jpg" class="card-img-top" alt="...">
         <div class="card-body">
             <h2 class="card-title text-center mt-2 mb-2"><?php echo $red["naslov"]; ?></h2>
             <p class="card-text"><?php echo $red["sadrzaj"]; ?></p>
         </div>

         <div class="card-footer">
             <p class="card-text"><?php echo $red['username']; ?></p>
         </div>
     </div>

 <?php endwhile; ?>