let app = angular.module("MiApp",[]);
app.controller("Datos",function ($scope) {
    $scope.nombre="Christian";
});

// Podemos simplificar el codigo javascript para q sea mas libiano
// en vez de  app.controller("Datos",function ($scope)
// Podemos Usar app.controller("EjmBlog",["$scope",function (s)
// en si enviamos un arreglo y al ultimo la funcion
// con esto en vez de llamar a $scope
// solo utilizamos la s q esta en la funcion

app.controller("EjmBlog",["$scope",function (s) {
    s.ncomen= {};
    s.comentarios=[
        {
            comentario: "Buen Trabajo",
            nombre_usuario: "Pedro"},
        {
            comentario:"Como estas",
            nombre_usuario:"Julio"
        }
    ];
    s.agregarcomentario=function () {
        s.comentarios.push(s.ncomen);
        s.ncomen={}
    }

}]);