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
            color: rgb(189, 189, 81);
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
            width: 100vw;
            margin: 0 auto;
            padding: 30px;
            background-color: rgb(50,50,50);
            border-radius: 25px;
        }

        .navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show > .nav-link{
            color: rgb(235, 235, 52)!important;
            text-decoration: underline;
        }

        .navbar-dark .navbar-nav .nav-link{
            color: rgb(189, 189, 81);!important
        }

        .spacer{
            height: 50px;
        }

        footer{
            background-color: rgb(50,50,50);
        }

        .list-unstyled a{
            color:rgb(189, 189, 81);!important
        }

        .social-links{
            color: rgb(189, 189, 81) !important;
        }

        .social-links:hover{
            text-decoration: underline !important;

        }

        .banner{
            width: 100%;
            height:45vh;
            background-image: url("https://wallpapers.net/bee-standing-in-a-lilac-flower-hd-wallpaper/download/5120x2160.jpg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
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

<div class="banner"></div>

<div class="spacer"></div>


<h1 class="text-center">Stertselaar</h1>
<div class="container content-box">
    <div class="row">
        <div class="col-sm-10 col-lg-6 col-md-12">
            <a href="#">Stertselaar 01</a>
            <br/><br/>
            <a href="#">Stertselaar 02</a>
            <br/><br/>
            <a href="#">Stertselaar 03</a>
            <br/><br/>
            <a href="#">Stertselaar 04</a>
            <br/><br/>
            <a href="#">Stertselaar 05</a>
            <br/><br/>
        </div>
        <img style="height: 0%;  width: 499px;  border-radius: 15%;" src="https://www.imkersleiden.nl/wp-content/uploads/2019/07/De-stertselaar-1.jpg" class="col-sm-12 col-lg-6 col-md-12">
    </div>
</div>

<div class="spacer"></div>


{{--    Grid system --}}



{{--    <div class="row">--}}
{{--        <div class="col">--}}
{{--            <img src="https://www.scitecheuropa.eu/wp-content/uploads/2019/09/Bee-hiding.jpg">--}}
{{--        </div>--}}
{{--        <div class="col">--}}
{{--            <p>--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mi enim, lacinia vitae odio eget, porttitor malesuada mi. Praesent maximus, tellus sed semper congue, nibh felis vehicula turpis, ac iaculis orci lacus id turpis. Aliquam quis feugiat dolor. Aenean consequat faucibus molestie. Aenean pharetra leo ut euismod venenatis. Maecenas non orci neque. Donec lorem enim, vulputate sit amet suscipit sed, lacinia et justo. Sed congue libero quis placerat tincidunt.--}}
{{--                <br/>--}}
{{--                Integer egestas posuere quam in varius. Morbi vitae lacus laoreet, ornare nisl in, auctor enim. Proin eu auctor augue. Nam turpis libero, condimentum sed consequat at, vulputate vitae nisi. Nullam id ultrices augue, sit amet semper orci. Morbi elit sem, volutpat et tellus id, dictum lobortis erat. Etiam aliquet massa felis, ut sodales sapien feugiat sit amet. Integer dictum dolor ut dolor luctus blandit. Nunc scelerisque rutrum diam sit amet pellentesque.--}}
{{--            </p>--}}

{{--        </div>--}}
{{--    </div>--}}

<div class="spacer"></div>

<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <!-- Grid column -->


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
            <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

                <!-- Social buttons -->
                <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

                <!-- Facebook -->
                <a type="button" class="btn-floating social-links">
                    <span>Instagram</span>
                </a>
                <!-- Twitter -->
                <a type="button" class="btn-floating social-links">
                    <span>Facebook</span>
                </a>
                <!-- Google +-->
                <a type="button" class="btn-floating social-links">
                    <span>Email</span>
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
