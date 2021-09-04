<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proficon Documentation</title>
    <meta name="description"
        content="Proficon is a simple-to-use HTTP-API for generating profile images for developers.">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/vs2015.min.css">
    <link rel="stylesheet" href="./css/documentation.css">

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
    <meta property="og:description"
        content="Proficon is a simple-to-use HTTP-API for generating profile images for developers.">
    <meta property="og:image" content="https://proficon.stablenetwork.uk/favicons/android-chrome-512x512.png">
    <meta property="og:image:secure_url"
        content="https://proficon.stablenetwork.uk/favicons/android-chrome-512x512.png">
    <meta property="og:image:width" content="512">
    <meta property="og:image:height" content="512">
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <img src="./img/logo.svg" width="26" class="me-2 shadow-sm">
                <a class="navbar-brand" href="#">Proficon API</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="./">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Documentation</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        proficon.stablenetwork.uk
                    </span>
                </div>
            </div>
        </nav>

        <div class="container-fluid m-0">
            <div class="container mt-5 mb-5 bg-white shadow-lg p-4">
                <h1 class="display-6 border-bottom pb-1">Getting Started</h1>
                <p>Basic usage of the API can be achieved by providing an avatar type and profile seed into a URL. For
                    example:</p>
                <pre class="mb-0"><code class="language-html"><?php
                echo htmlentities('<img src="https://proficon.stablenetwork.uk/api/{type}/{seed}.svg" alt="Example Profile Icon" />');
                ?></code></pre>

                <small class="text-muted">This would return an SVG version of the requested profile avatar.</small>

                <p class="mt-2">Currently, Proficon supports <strong>two</strong> avatar types:</p>

                <div class="row pt-3 pb-3">
                    <div class="col d-flex justify-content-center">
                        <div class="card shadow-sm mb-3 mb-sm-0" style="width: 10rem;">
                            <img src="https://proficon.stablenetwork.uk/api/initials/ex.svg" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <p class="card-text text-center">Initials</p>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="card shadow-sm" style="width: 10rem;">
                            <img src="https://proficon.stablenetwork.uk/api/identicon/test.svg" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <p class="card-text text-center">Identicons</p>
                            </div>
                        </div>
                    </div>
                </div>

                <pre><code class="language-html"><?php
                echo htmlentities('<img src="https://proficon.stablenetwork.uk/api/initials/ex.svg" alt="Initials Profile Icon" />
<img src="https://proficon.stablenetwork.uk/api/identicon/johnsmith.svg" alt="Identicons Profile Icon" />');
                ?></code></pre>

                <p>The seed value can be any value that you want, things like UUIDs, usernames etc. would work well for profiles.</p>
                <p>Just don't use sensitive information, such as passwords.</p>
            </div>
        </div>
    </main>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>
    <script src="./js/highlight.min.js"></script>
    <script>
        hljs.highlightAll();
    </script>
</body>

</html>