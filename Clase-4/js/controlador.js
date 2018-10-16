let app = angular.module("MiApp",[]);
app.controller("Datos",function ($scope) {
    $scope.nombre="Christian";
});
app.controller("EjmBlog",function ($scope) {
    $scope.ncomen= {};
    $scope.comentarios=[
        {
            comentario: "Buen Trabajo",
            nombre_usuario: "Pedro"},
        {
            comentario:"Como estas",
            nombre_usuario:"Julio"
        }
    ];
    $scope.agregarcomentario=function () {
        $scope.comentarios.push($scope.ncomen)
        $scope.ncomen={}
    }

})