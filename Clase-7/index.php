<!doctype html>
<html lang="es" ng-app="MiAplicacion">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/angularjs/angular.js"></script>
    <script src="js/controlador.js"></script>
    <style>
        table td{
            border: black 1px solid;
        }
    </style>
    <title>AJAX con $HTTP</title>
</head>
<body>
<div ng-controller="controladorAjax">
    <table>
        <tr ng-repeat="x in datos">

            <td>{{x.Codigo_Producto}}</td>
            <td>{{x.Descripcion_Producto}}</td>

        </tr>
    </table>
</div>
</body>
</html>