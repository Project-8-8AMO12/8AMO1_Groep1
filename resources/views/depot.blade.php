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

        .banner{
            width: 100%;
            height:45vh;
            background-image: url("https://wallpapers.net/bee-standing-in-a-lilac-flower-hd-wallpaper/download/5120x2160.jpg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        @endsection

@section('header_not_home')
    <div class="banner"></div>
@endsection
@section('content')


<h1 class="text-center">Depot</h1>
<div class="container content-box">
    <div class="row">
        <div id="googleMap" style="width:100%;height:400px;" class="col-sm-12 col-lg-6 col-md-12"></div>
        <p class="col-sm-12 col-lg-6 col-md-12">
            <br/>
            Winkel/verenigingsgebouw (voorheen depot):
            <br/>
            <br/>
            Boerenpad 3,<br/> 2322 LA Leiden
            <br/>
            <br/>
            <br/>
            Postadres:
            <br/>
            <br/>
            Imkersvereniging Leiden en omstreken
            <br/>
            Jan van Goyenkade 42
            <br/>
            2311 BC Leiden
        </p>
    </div>
</div>

@endsection

@section('scripts')
{{--Google maps api scripts--}}
<script>
    function myMap() {
        var mapProp= {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
@endsection

