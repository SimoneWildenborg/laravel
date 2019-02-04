<!DOCTYPE html>

<html>

<head>

</head>
<body>
    <h1>Schrijf je hier in</h1>

<form action="/lopers" method="POST" >
    {{ csrf_field() }}
    
    <input type="text" name="name" placeholder="Naam deelnemer">
    <input type="text" name="email" placeholder="Emailadres deelnemer">
    <input type="numbers" name="distance" placeholder="Afstand (5km, 10km, 15km)">
    <button type="submit">Inschrijven</button>
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