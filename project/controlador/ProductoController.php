// controller/ProductoController.php
<?php
include_once '../model/Producto.php';

class ProductoController {
    public function obtenerProductos() {
        $productos = [
            new Producto("Producto 1", "Descripción 1", 10.00, 100),
            new Producto("Producto 2", "Descripción 2", 20.00, 50),
        ];
        return $productos;
    }
}
?>
