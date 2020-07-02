@extends('layouts/pages')
            @section('style')
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
        @endsection

        @section('header')

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
        @endsection
        @section('content')

    <h1 class="text-center">News</h1>
    <div class="container content-box">
        <div class="row">
            <img  class="col-sm-12 col-lg-6 col-md-12" style="width: 100%; height:0%" src="https://www.scitecheuropa.eu/wp-content/uploads/2019/09/Bee-hiding.jpg">
                <p class="col-sm-12 col-lg-6 col-md-12">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mi enim, lacinia vitae odio eget, porttitor malesuada mi. Praesent maximus, tellus sed semper congue, nibh felis vehicula turpis, ac iaculis orci lacus id turpis. Aliquam quis feugiat dolor. Aenean consequat faucibus molestie. Aenean pharetra leo ut euismod venenatis. Maecenas non orci neque. Donec lorem enim, vulputate sit amet suscipit sed, lacinia et justo. Sed congue libero quis placerat tincidunt.
                    <br/>
                    Integer egestas posuere quam in varius. Morbi vitae lacus laoreet, ornare nisl in, auctor enim. Proin eu auctor augue. Nam turpis libero, condimentum sed consequat at, vulputate vitae nisi. Nullam id ultrices augue, sit amet semper orci. Morbi elit sem, volutpat et tellus id, dictum lobortis erat. Etiam aliquet massa felis, ut sodales sapien feugiat sit amet. Integer dictum dolor ut dolor luctus blandit. Nunc scelerisque rutrum diam sit amet pellentesque.
                </p>
        </div>
    </div>

    <div class="spacer"></div>

    <h1 class="text-center">Information</h1>
    <div class="container content-box">
        <div class="row">
          <p class="col-sm-12 col-lg-12 col-md-12" style="background-color: rgb(40,40,40); border-radius:25px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mi enim, lacinia vitae odio eget, porttitor malesuada mi. Praesent maximus, tellus sed semper congue, nibh felis vehicula turpis, ac iaculis orci lacus id turpis. Aliquam quis feugiat dolor. Aenean consequat faucibus molestie. Aenean pharetra leo ut euismod venenatis. Maecenas non orci neque. Donec lorem enim, vulputate sit amet suscipit sed, lacinia et justo. Sed congue libero quis placerat tincidunt.
                <br/>
                Integer egestas posuere quam in varius. Morbi vitae lacus laoreet, ornare nisl in, auctor enim. Proin eu auctor augue. Nam turpis libero, condimentum sed consequat at, vulputate vitae nisi. Nullam id ultrices augue, sit amet semper orci. Morbi elit sem, volutpat et tellus id, dictum lobortis erat. Etiam aliquet massa felis, ut sodales sapien feugiat sit amet. Integer dictum dolor ut dolor luctus blandit. Nunc scelerisque rutrum diam sit amet pellentesque.
            </p>

            <p class="col-sm-12 col-lg-12 col-md-12" style="background-color: rgb(40,40,40); border-radius:25px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mi enim, lacinia vitae odio eget, porttitor malesuada mi. Praesent maximus, tellus sed semper congue, nibh felis vehicula turpis, ac iaculis orci lacus id turpis. Aliquam quis feugiat dolor. Aenean consequat faucibus molestie. Aenean pharetra leo ut euismod venenatis. Maecenas non orci neque. Donec lorem enim, vulputate sit amet suscipit sed, lacinia et justo. Sed congue libero quis placerat tincidunt.
                <br/>
                Integer egestas posuere quam in varius. Morbi vitae lacus laoreet, ornare nisl in, auctor enim. Proin eu auctor augue. Nam turpis libero, condimentum sed consequat at, vulputate vitae nisi. Nullam id ultrices augue, sit amet semper orci. Morbi elit sem, volutpat et tellus id, dictum lobortis erat. Etiam aliquet massa felis, ut sodales sapien feugiat sit amet. Integer dictum dolor ut dolor luctus blandit. Nunc scelerisque rutrum diam sit amet pellentesque.
            </p>

            <p class="col-sm-12 col-lg-12 col-md-12" style="background-color: rgb(40,40,40); border-radius:25px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mi enim, lacinia vitae odio eget, porttitor malesuada mi. Praesent maximus, tellus sed semper congue, nibh felis vehicula turpis, ac iaculis orci lacus id turpis. Aliquam quis feugiat dolor. Aenean consequat faucibus molestie. Aenean pharetra leo ut euismod venenatis. Maecenas non orci neque. Donec lorem enim, vulputate sit amet suscipit sed, lacinia et justo. Sed congue libero quis placerat tincidunt.
                <br/>
                Integer egestas posuere quam in varius. Morbi vitae lacus laoreet, ornare nisl in, auctor enim. Proin eu auctor augue. Nam turpis libero, condimentum sed consequat at, vulputate vitae nisi. Nullam id ultrices augue, sit amet semper orci. Morbi elit sem, volutpat et tellus id, dictum lobortis erat. Etiam aliquet massa felis, ut sodales sapien feugiat sit amet. Integer dictum dolor ut dolor luctus blandit. Nunc scelerisque rutrum diam sit amet pellentesque.
            </p>
        </div>
    </div>
@endsection



