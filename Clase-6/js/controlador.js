let app = angular.module("MiAplicacion",[]);
app.controller("controladorAjax",["$scope","$http",function (s,h) {
    h.get("prueba.php")
        .then(function (respose) {
            s.datos=respose.data;
        },function (error) {
            console.log(error);
        })
}]);