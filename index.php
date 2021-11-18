<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP</title>
</head>

<body>
    <h1>MOVIES</h1>
    <section class='row justify-content-center'>
        <?php
        require_once 'Movie.php';
        $movies = (new Movie())->all();

foreach ($movies as $movie) {
    echo "
    
    <div class='card' style='width: 18rem;'>
        <img src={$movie->image} class='card-img-top'>
        <div class='card-body'>
            <h5 class='card-title'>{$movie->title}</h5>
        </div>
    </div>
    
    ";
}
    ?>
    </section>
</body>

</html>