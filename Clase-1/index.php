<!doctype html>
<html lang="es" ng-app>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.4/angular.js"></script>-->
    <script src="angularjs/angular.js"></script>
    <title>Hola Mundo</title>
</head>
<body>

<label for="">Escribe Tu Nombre: </label>
<input type="text" name="txttexto" id="txttexto" ng-model="minombre">

<h1 >Hola {{minombre}}</h1>

</body>
</html>