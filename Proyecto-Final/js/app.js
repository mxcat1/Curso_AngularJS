let app = angular.module('crud',[]);

app.controller("crudController",["$scope","$http",function (s, h) {
    s.productos=[];
    s.producto={};
    s.detalle_producto={};
    s.errors={};

    s.mostrarproductos=function () {
        h({
            method: "POST",
            url: "php/controladores/productos.php",
            data:{opcion:"mostrar_productos"}
        })
            .then(function (data) {
                s.productos=data.data;
            },function (error){
                console.log("se encontro un error "+ error)
            })
    };
    s.mostrarproductos();

    //regitrar producto
    s.nuevoProducto=function () {
        h({
            method: "POST",
            url: "php/controladores/productos.php",
            data:{opcion:"nuevo_producto",producto:s.producto}
        })
            .then(function (data) {
                s.errors=[];
                s.productos.push(data.data.producto)

                let modal_ele=angular.element('#add_new_modal');
                modal_ele.modal('hide');
            },function (error) {
                s.errors=error.data.errors;
            })
    }
    s.eliminarProducto=function (id_producto) {
        let confir=confirm("¿Esta seguro de elimnar el siguiente producto?");
        // let dato_borrar=s.productos[id_producto];
        // console.log(dato_borrar.id_producto);
        // console.log(id_producto);
        if (confir) {
            h({
                method:"POST",
                url:"php/controladores/productos.php",
                data:{opcion:"eliminar_producto",producto:s.productos[id_producto]}

            })
                .then(function (data) {
                    s.errors=[];
                    s.productos.splice(id_producto,1);
                }, function (error) {
                    s.errors=error.data.errors;
                })
        }
    }

}]);