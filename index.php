<?php

if(isset($_GET['inputVal'])){
    $googleMapsURL = 'https://maps.google.com/maps/api/geocode/json?address='
    .urlencode($_GET['inputVal']);
    $mapJSON = file_get_contents($googleMapsURL);
    echo $mapJSON;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" name="inputVal"/>
        <button type="submit">Search</button>
    </form>
</body>
</html>