<?php

$conn = mysqli_connect('localhost', 'root', '', 'movies_project');
$query = "SELECT id, title, poster, descreption
FROM movies

ORDER BY title ASC";

if (isset($_POST['signinbtn'])) {
  if($_POST['title']){
    $query = "SELECT * FROM movies where title like '%" . $_POST['title'] . "%'";
   
  }
  $result = mysqli_query($conn, $query);
  $movies = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($conn);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movies_page</title>
</head>

<body>
<?php

include 'navbar.html';
?>
    <form method="post">
    <input type="text" name="title" placeholder="entrez le titre d'un film"><br>
    <input type="submit" name="signinbtn" value="Signin">
    </form>

    <h1>movies List</h1>

    <?php 
      $result = mysqli_query($conn, $query);
    $movies = mysqli_fetch_all($result, MYSQLI_ASSOC);


    foreach ($movies as $movie) : ?>

        <p>
            <strong>Title : </strong>
            <?= $movie['title']; ?>
        </p>

        <p>
            <strong>description : </strong>
            <?= $movie['descreption']; ?>
        </p>

        <p>
            <strong>Poster : </strong>
            <img src="<?= $movie['poster']; ?>" width="200px">
        </p>
        <a href="./details_movie.php?id=<?= $movie['id']; ?>">Detail movie</a>

        <hr>

    <?php endforeach; ?>

</body>

</html>
    