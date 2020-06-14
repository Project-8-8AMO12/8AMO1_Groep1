<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <style>
            html, body {
                background-color: rgb(35,35,35);
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
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .content-box{
                width: 70vw;
                margin: 0 auto;
                background-color: rgb(50,50,50);
            }



            .spacer{
                height: 50px;
            }

            footer{
                background-color: rgb(50,50,50);
            }



        </style>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <img style="width: 150px;" src="https://www.imkersleiden.nl/wp-content/uploads/2019/07/Logo-Imkers-Leiden.svg" class="img-fluid" alt="Responsive image">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Activiteiten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cursussen</a>
                </li>
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </ul>
        </div>
    </nav>

    <div class="spacer"></div>
    <div class="spacer"></div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 75vw; margin: 0 auto; height: auto;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.wallpapersden.com/image/download/bee-flower-pollination_25261_1920x1080.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.wallpaperscraft.com/image/bee_sunflower_macro_142883_1920x1080.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://wallpaperstock.net/bee-on-yellow-flower_wallpapers_1030_1920x1080.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="spacer"></div>

    <div class="d-flex content-box">
        <img class="m-2" width="60%" src="https://www.scitecheuropa.eu/wp-content/uploads/2019/09/Bee-hiding.jpg">
        <p class="m-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mi enim, lacinia vitae odio eget, porttitor malesuada mi. Praesent maximus, tellus sed semper congue, nibh felis vehicula turpis, ac iaculis orci lacus id turpis. Aliquam quis feugiat dolor. Aenean consequat faucibus molestie. Aenean pharetra leo ut euismod venenatis. Maecenas non orci neque. Donec lorem enim, vulputate sit amet suscipit sed, lacinia et justo. Sed congue libero quis placerat tincidunt.
            <br/>
            Integer egestas posuere quam in varius. Morbi vitae lacus laoreet, ornare nisl in, auctor enim. Proin eu auctor augue. Nam turpis libero, condimentum sed consequat at, vulputate vitae nisi. Nullam id ultrices augue, sit amet semper orci. Morbi elit sem, volutpat et tellus id, dictum lobortis erat. Etiam aliquet massa felis, ut sodales sapien feugiat sit amet. Integer dictum dolor ut dolor luctus blandit. Nunc scelerisque rutrum diam sit amet pellentesque.
        </p>
    </div>

    <div class="spacer"></div>

    <!-- Footer -->
    <footer class="page-footer font-small mdb-color lighten-3 pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mb-4">Sitemap</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p>
                                <a href="#!">Activiteiten</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a href="#!">Cursussen</a>
                            </p>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">


                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

                    <!-- Social buttons -->
                    <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

                    <!-- Facebook -->
                    <a type="button" class="btn-floating btn-fb">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <!-- Twitter -->
                    <a type="button" class="btn-floating btn-tw">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <!-- Google +-->
                    <a type="button" class="btn-floating btn-gplus">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <!-- Dribbble -->
                    <a type="button" class="btn-floating btn-dribbble">
                        <i class="fab fa-dribbble"></i>
                    </a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">Copyright
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <div>

    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
