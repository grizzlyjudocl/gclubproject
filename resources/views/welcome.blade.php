<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Grizzly Judo Club</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }


            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                flex-direction: column;
            }

            .position-ref {
                position: relative;
                background: lightblue;
            }
            .container {
                padding: 120px 0 0 0;
                transform: translateY(-100px);
            }
            .head_mobile {
                font-weight: 600;
                font-size: 26px;
            }

            @media screen and (min-width: 830px) { 
                .position-ref {

                 background-repeat: no-repeat;
                 background: url('https://i.imgur.com/cYF5eFj.png');
                 background-position: bottom;
                 background-size: cover;
                 }

                 .container {
                    padding: 260px 0 0 0;
                    transform: translateY(-16px);
                 }

                 .head_mobile {
                    display:none;
                 } 
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .row {
                margin-bottom: 34px;
            }

            .container form {
                padding: 20px;
                box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.55);
                background: white;
                border: 4px solid #93aee8;
            }
            .alert-danger {
                margin: 10px 0;
            }
            .info-judo {
                font-weight: 900;
            }

            .hide-item {
                display:none;
            }
            .js--rodo-btn { cursor: pointer; display: block; font-weight: 900; text-decoration: underline !important;}
            .js--rodo { display:none; font-size: 12px;}
        </style>
        <script>
        function toggle() {
          var x = document.getElementById("js--rodo");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="head_mobile">GRIZZLY JUDO KIDS</div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.707 13.946l-1.035 1.054h-.672v1h-1v1h-3v-2.292l3.146-3.185c.496 1.111 1.419 1.988 2.561 2.423zm5.293-4.279c0 2.025-1.642 3.667-3.667 3.667-2.024 0-3.666-1.642-3.666-3.667s1.642-3.667 3.666-3.667c2.025 0 3.667 1.642 3.667 3.667zm-1.375-1.375c0-.506-.41-.917-.917-.917s-.916.411-.916.917.409.917.916.917.917-.411.917-.917z"/></svg>
                        </a>

                        {{--
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                        --}}
                    @endauth
                </div>
            @endif

            <div class="container">
                @include('body')
            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>


        <script type="text/javascript" charset="utf8" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        @if(old('showToastr'))
            <script type="text/javascript">
                toastr["success"]("Sukces")
            </script>
        @endif
    </body>
</html>
