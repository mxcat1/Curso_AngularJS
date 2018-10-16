<!doctype html>
<html lang="es" ng-app="MiApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/angularjs/angular.js"></script>
    <script src="js/controlador.js"></script>
    <title>ng model y data binding</title>
<!--   Two Data Binding  sincronizacion de vista y sincronizacion con el valor-->

</head>
<body >

<div ng-controller="Datos">
    <label for="txttexto">Ingrese su Nombre</label>
    <input type="text" name="txttexto" id="txttexto" ng-model="nombre">
    <br>
    <h1>{{"Hola "+ nombre}}</h1>
</div>
<div ng-controller="EjmBlog">
    <label for="txtcomen">Escriba su Comentario: </label>
    <input type="text" name="txtcomen" id="txtcomen" ng-model="ncomen.comentario">
    <br>
    <label for="txtuser">Escriba su Usuario</label>
    <input type="text" name="txtuser" id="txtuser" ng-model="ncomen.nombre_usuario">
    <br>
    <button ng-click="agregarcomentario()">Agregar Un Nuevo Comentario</button>
    <h3>Comentarios</h3>
    <ul>
        <li ng-repeat="comentario in comentarios">
            {{comentario.comentario}}
            <br>
            <strong>
                {{comentario.nombre_usuario}}
            </strong>
        </li>
    </ul>

</div>

</body>
</html>