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

        <?php 
            /*foreach ($movies as $movie) {
                # code...
            } */
        
        ?>

        <section class="container d-flex justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <img src="https://th.bing.com/th/id/OIP.jrS3kCsr9-YWwJvRqcGxXwHaJ4?w=132&h=180&c=7&r=0&o=5&pid=1.7" class="card-img-top" alt="Avatar">
                <div class="card-body">
                    <h5 class="card-title">Avatar</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Aventure</h6>
                    <p class="card-text">film avec des gens bleus</p>
                    <a href="#" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Modifier">
                        <i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="#" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Supprimer">
                        <i class="fa-solid fa-trash-can"></i></a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="https://th.bing.com/th/id/OIP.14VDS149rffb0n0Bg3P-jwHaJQ?w=125&h=180&c=7&r=0&o=5&pid=1.7" class="card-img-top" alt="Titanic">
                <div class="card-body">
                    <h5 class="card-title">Titanic</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Drame</h6>
                    <p class="card-text">film avec un bateau qui coule.</p>
                    <a href="#" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Modifier">
                        <i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="#" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Supprimer">
                        <i class="fa-solid fa-trash-can"></i></a>
                </div>
            </div>
        </section>
    </main>


    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="./script/script.js"></script>
</body>

</html>