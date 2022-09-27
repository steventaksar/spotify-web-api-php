<!DOCTYPE html>
<!-- saved from url=(0064)https://getbootstrap.com/docs/5.2/examples/sticky-footer-navbar/ -->
<html lang="en" class="h-100"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Playlist - Silvester in Tegel 2022</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sticky-footer-navbar/">

    <link href="./index_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="./index_files/sticky-footer-navbar.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">


<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://getbootstrap.com/docs/5.2/examples/sticky-footer-navbar/#">Silvester in Tegel - 2022</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0 text-center text-white">
                    Playlist
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Titel, Artist" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Songsuche</button>
                </form>
            </div>
        </div>
    </nav>
</header>

<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Silvester-Playlist-2022</h1><br>
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        require 'vendor/autoload.php';

        $session = new SpotifyWebAPI\Session(
            'c4ba264bb5164e8f86e5d222f4a6f504',
            '54741742278047aaa9b05d141ae1aae3',
            'https://spotify.silvesterintegel.de'
        );

        $api = new SpotifyWebAPI\SpotifyWebAPI();

        if (isset($_GET['code'])) {
            $session->requestAccessToken($_GET['code']);
            $api->setAccessToken($session->getAccessToken());

            print_r($api->me());
        } else {
            $options = [
                'scope' => [
                    'user-read-email',
                ],
            ];

            header('Location: ' . $session->getAuthorizeUrl($options));
            die();
        }
        ?>
    </div>
</main>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">Powered by Steven Taksar - <a href="https://taksar.de">taksar.de</a></span>
    </div>
</footer>


<script src="./index_files/bootstrap.bundle.min.js.Download" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>




</body></html>