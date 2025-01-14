<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- TODO: personnaliser cette page
        Ce n'est pas une page de laravel mais
        le portail pour notre application --}}

        <title>Bienvenu - Educom</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {

                background-image: url('../../tco1.webp') !important;

                background-repeat:no-repeat;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 10px 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                background:#ffffffbf;
                border-radius:15px;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .welcom-text{
                position:relative;
                cursor:pointer;
                border-radius:15px;
                padding:90px 200px;
                background:#ffffff8f;
                color:#202020 !important;
                transition:all 0.9s ease;
            }
            .welcom-text:hover{
                top:-5px;
                background:#ffffff9f;
            }
        </style>
    </head>
    <body>
    <div class="flex-center position-ref full-height" style="border-bottom:1px solid #7d2ae7 !important">
        <div class="top-left" style="position:absolute;left:10px;top:18px;color:#ffffff;font-weight:bold;font-size:25px">
                Educom
            </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Acceuil</a>
                    @else
                       {{-- <a href="#">A propos</a>
                        <a href="#">Contact</a> --}}
                        <a href="{{ route('login') }}">Se Connecter</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">S'inscricre</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
            <div class="container welcom-text">
            <h1 style="color:#7d2ae7 !important;font-size:40px;font-weight:bold">Bienvenu à Educom</h1>
            <p><i>Votre plate-form elearning pour suivre et télécharger les cours facilement et gratuitement</i></p>
            </div>
            </div>
        </div>
    </body>
</html>
