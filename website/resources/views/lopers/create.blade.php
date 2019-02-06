<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
        <!-- Styles -->
        <style>
        .form{
            
            height: 6vh;
            margin-left: 32vw;
            margin-top: 5vh;
        }
        .input{
            width: 35vw;
            height: 5vh;
            text-align: center;
            border: 3px solid #8f8f8f;
            margin-bottom: 0.5vh;
            border-radius: 3%;
        }
        h1{
            text-align: center;
            font-size: 3em;
        }
        .button{
            margin-top: 2vh;
            margin-left: 13vw;
            width:8vw;
            height: 5vh;
            background-color: #8f8f8f;
            border: 2px solid #000;
            border-radius: 5%;
        }
        button:hover{
            background:red;
            border:2px solid #8f8f8f;
            
            font-weight:800;
            font-size: 1em;
        }
</style>
</head>
<body>


    

    <h1>Schrijf je hier in</h1>

<form class="form" action="/lopers" method="POST" >
    {{ csrf_field() }}
    
    <input class="input" type="text" name="name" placeholder="Vul hier uw naam in." required><BR>
    <input class="input" type="text" name="email" placeholder="Vul hier uw emailadres in." required><BR>
    <input class="input" type="numbers" name="distance" placeholder="Vul hier de afstand (5km, 10km, 15km) in." required><BR>
    <button class="button" type="submit">Inschrijven</button>
</form>

    <!--<BR>
    /*<p> Vink hier onder aan welke afstand je loopt:</p><BR>
    <input type="checkbox" name="distance" value="five">5 km
    <input type="checkbox" name="distance" value="ten">10 km
    <input type="checkbox" name="distance" value="fifteen">15 km
    <BR><BR>
    -->







</body>


</html>