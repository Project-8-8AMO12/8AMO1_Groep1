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

        .table{

        }

        .table th{
            color: grey;
            border-top: none;
        }

        .table td{
            color: grey;
            border-top: none;
        }

        .table td, .table th{
            border-bottom: 1px solid grey;
        }

        .table tr{
            border-top: 1px solid grey;
        }

        .table thead th{
            border-bottom: none;
        }
        @endsection

@section('header_not_home')
<div class="banner"></div>
@endsection
@section('content')

<h1 class="text-center">Cursussen</h1>
<div class="container content-box">
    <table class="table">
        <tbody>
        <tr>
            <th scope="row">T1</th>
            <td>Kennismaking, introductie, lesmateriaal (Handboek praktijk) en imker materialen</td>
        </tr>
        <tr>
            <th scope="row">T2</th>
            <td>De biologie van de bij blz 7 e.v.</td>
        </tr>
        <tr>
            <th scope="row">T3</th>
            <td>Werken in de bijen blz 38 e.v.</td>
        </tr>
        <tr>
            <th scope="row">T4</th>
            <td>Zwermen en afleggers blz 52 e.v.</td>
        </tr>
        <tr>
            <th scope="row">T5</th>
            <td>Bijengezondheid blz 93 e.v.</td>
        </tr>
        <tr>
            <th scope="row">P1</th>
            <td>Timmerles</td>
        </tr>
        <tr>
            <th scope="row">P2</th>
            <td>Voorbereiding bijenseizoen, schoonmaken materiaal</td>
        </tr>
        <tr>
            <th scope="row">P3</th>
            <td>Voorjaarscontrole</td>
        </tr>
        </tbody>
    </table>
</div>
@endsection

