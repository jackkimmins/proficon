<?php

    //Creates a random 2 character string to be used for the example profile.
    $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $charactersLength = strlen($characters);

    $randomString = "";

    for ($i = 0; $i < 2; $i++)
        $randomString .= $characters[rand(0, $charactersLength - 1)];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proficon</title>
    <meta name="description" content="Proficon is a simple-to-use HTTP-API for generating profile images for developers.">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/homepage.css">

    <link rel="apple-touch-icon" sizes="180x180" href="./favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
    <link rel="manifest" href="./favicons/site.webmanifest">
    <link rel="mask-icon" href="./favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="./favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="./favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://proficon.stablenetwork.uk/">
    <meta property="og:description" content="Proficon is a simple-to-use HTTP-API for generating profile images for developers.">
    <meta property="og:image" content="https://proficon.stablenetwork.uk/favicons/android-chrome-512x512.png">
    <meta property="og:image:secure_url" content="https://proficon.stablenetwork.uk/favicons/android-chrome-512x512.png">
    <meta property="og:image:width" content="512">
    <meta property="og:image:height" content="512">
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <img src="./img/logo.svg" width="26" class="me-2 shadow-sm">
                <a class="navbar-brand" href="#">Proficon API</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="./">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./documentation.php">Documentation</a>
                        </li>
                    </ul>

                    <span class="navbar-text">
                        proficon.stablenetwork.uk
                    </span>
                </div>
            </div>
        </nav>

        <div class="container-fluid d-flex align-items-center justify-content-center" id="hero">
            <div class="container">
                <div class="row p-4">
                    <div class="col-lg pr-lg-4">
                        <h1>Proficon HTTP API</h1>
                        <p>Proficon is a simple-to-use <strong>HTTP-API</strong> for generating profile images for developers. No API keys, no usage tracking and best of all, <strong>completely free</strong>.</p>
                        <p>Check out the demo and read the <a href="./documentation.php">documentation</a> to integrate the API with your project.</p>
                        <a href="https://github.com/workingPlock/proficon" target="_blank" class="btn">GitHub</a>
                        <a href="./documentation.php" class="btn">Documentation</a>
                    </div>

                    <div class="col-sm d-flex align-items-center justify-content-center pt-4 pt-lg-0">
                        <div class="row search-row">
                            <div class="col">
                                <img src="./api/initials/<?= $randomString ?>.svg" class="icon-example" alt="...">
                            </div>

                            <div class="col">
                                <div class="search d-flex align-items-center">
                                    <div id="tryItOut">
                                        <div>
                                            <select class="form-select" style="display: none">
                                                <option value="initials">initials</option>
                                            </select>
                                        </div>

                                        <div>
                                            <input type="text" id="txtInput" class="form-control" placeholder="Image Seed">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="text-center">
            &copy; Stable Network <?= date('Y') ?> • All rights reserved.
        </footer>
    </main>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>
    <script src="./js/script.js"></script>
</body>

</html>