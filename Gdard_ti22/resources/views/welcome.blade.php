<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GENERADOR API REST</title>
    </head>
    <style>
        ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
li {
    float: left;
    border-right:1px solid #bbb;
}
li:last-child {
    border-right: none;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover:not(.active) {
    background-color: #111;
}
    </style>
    <body>
        <h1 align="center">GENERADOR API REST</h1>
        <ul>
            <li><a href="welcome">GENERAR API</a></li>
        </ul>
        <select name="color" id="color">
            <option value="r">Rojo</option>
            <option value="a">Azul</option>
            <option value="v">Verde</option>
        </select>
    </body>
</html>