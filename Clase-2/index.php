<!doctype html>
<html lang="es" ng-app="MiPrimeraApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.4/angular.js"></script>-->
    <script src="js/angularjs/angular.js"></script>
    <script src="js/controlador.js"></script>
    <title>Primer Controlador</title>
</head>
<body>

<div ng-controller="PrimerControlador">
    <h1>{{"Hola "+ nombre}}</h1>
</div>

</body>
</html>