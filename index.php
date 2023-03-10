<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/main.css">
    <title>My Movies</title>
</head>

<body>

<?php

function loadClass(string $class) {
    if ($class === "DotEnv") {
        require_once "./config/$class.php";
    } else if(str_contains($class, "Controller")) {
        require_once "./Controller/$class.php";
    } else {
        require_once "./Entity/$class.php";
    }
}
spl_autoload_register("loadClass");


require_once("./config/DotEnv.php");
require_once("./Entity/Movie.php");
require_once("./Entity/Category.php");
require_once("./Controller/MovieController.php");
require_once("./Controller/CategoryController.php");

$movieController = new MovieController();
$movies = $movieController->getAll();

$categoryController = new CategoryController();

/* echo "<pre>";
var_dump($categories);
echo "</pre>"; */

/*$movie = new Movie([
    "id" => 1, 
    "title" => "Avatar",
    "description" => "un film avec des gens bleus...",
    "image_url" => "https://th.bing.com/th/id/OIP.fGAAmasOt143fXzpdIuTbgHaK-?",
    "release_date" => "2009-12-16",
    "director" => "James Cameron", 
    "category_id" => 3
]);*/




?>
    

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="bi bi-film fs-3"> My movies</i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./views/create.php">Publier un film</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <h1>My movies</h1>
        <h3>découvrez et partagez des films</h3>
        <img class="logo" src="./images/arrangement-film-reels-clapboard.jpg" alt="Logo my movies">

        

        <section class="container d-flex justify-content-center">
        <?php 
            foreach ($movies as $movie): 
                $Category = $categoryController->get($movie->getCategory_id());
        ?>
            <div class="card mx-3" style="width: 18rem;">
                <img src="https://th.bing.com/th/id/OIP.jrS3kCsr9-YWwJvRqcGxXwHaJ4?w=132&h=180&c=7&r=0&o=5&pid=1.7" class="card-img-top" alt="<?php $movie->getTitle() ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $movie->getTitle() ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $movie->getRelease_date() ?> - <?= $movie->getDirector() ?></h6>
                    <p class="card-text"><?= $movie->getDescription() ?> </p>
                    <footer class="blockquote-footer" style="color: <?= $category->getColor() ?>"><?= $Category->getName() ?> </footer>
                    <a href="#" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Modifier">
                        <i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="./views/delete.php?id=<?= $movie->getId() ?>" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Supprimer">
                        <i class="fa-solid fa-trash-can"></i></a>
                </div>
            </div>

            <?php endforeach ?>
        </section>
    </main>


    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="./script/script.js"></script>
</body>

</html>