<?php

$conn = mysqli_connect('localhost', 'root', '', 'movies_project');
$query = "SELECT *
FROM movies
WHERE id= ".$_GET['id'];
$result = mysqli_query($conn, $query);
$movies = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    

    <h1>detail movie</h1>

    <?php foreach ($movies as $movie) : ?>

        <p>
            <strong>title : </strong>
            <?= $movie['title']; ?>
        </p>

        <p>
            <strong>description : </strong>
            <?= $movie['description']; ?>
        </p>

        <p>
            <strong>release_date : </strong>
            <?= $movie['release_date']; ?>
        </p>

        <p>
            <strong>director_id : </strong>
            <?= $movie['director_id']; ?>
        </p>

        <p>
            <strong>Poster : </strong>
            <img src="<?= $movie['poster']; ?>" width="200px">
        </p>

      
        <hr>

    <?php endforeach; ?>

</body>