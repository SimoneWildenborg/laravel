<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #ffe6ff;
                color: #000;
                font-family: 'Sansita', sans-serif;
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

            .links{
                display:inline;
                margin-left: 2vw;
                margin-top: 4vh;
            }

            .links > a {
                
                margin: 0 2vw;
                padding: 5px;
                font-size: 1.4vw;
                font-weight: 600;
                letter-spacing: .2vw;
                text-decoration: none;
                text-transform: uppercase;
                background-color:#8f8f8f;
                opacity: 1;
                color: #000;
            }
            .h1{
                text-align: center;
                font-size: 4vw;
                letter-spacing: 3px;
                font-weight:700;
                margin: 0px -30px;
                border: 3px solid #000;
                background-color:#8f8f8f;
                opacity: 1;
                color: #fa000a;
                background-origin: content-box;
                line-height: 1vh;
                transform:rotate(-5deg);
                text-shadow: 2px 2px 4px #000;
            }
            h2{
                text-align: center;
                font-size: 4em;
                
            }
            
            a:hover{
                color: #000;
                background: #fa000a;
                border: 2px solid #000;
            }

            
        </style>

        
    </head>
    <body>

</html>


@section('title', 'individueel inschrijven')
@section('content')

    <div class="h1"> <p>Individueel inschrijven</p></div>
    <BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
@endsection

@extends('layout')

   
