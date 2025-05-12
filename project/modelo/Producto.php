// model/Producto.php
<?php
class Producto {
    public $nombre;
    public $descripcion;
    public $precio;
    public $stock;

    public function __construct($nombre, $descripcion, $precio, $stock) {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->stock = $stock;
    }
}
?>
