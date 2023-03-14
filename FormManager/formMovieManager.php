<?php
        if($_POST) {
            function loadClass($class) 
                {
                    if (str_contains($class, "controller")) {
                        require "../controller/$class.php";
                    } else {
                        require "../Entity/$class.php";
                    }
                }
                spl_autoload_register("loadClass");

                $movieController = new MovieController();
                $newMovie = new Movie($_POST);
                $movieController->create($newMovie);
        }
    ?>