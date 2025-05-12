<!DOCTYPE html>
<html>
<head>
  <title>Gestor de Productos</title>
  <style>
    /* Estilos CSS para los formularios */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    .product-form {
      background-color: #f5f5f5;
      padding: 20px;
      border-radius: 5px;
      margin-bottom: 30px;
    }

    .product-form label {
      display: block;
      margin-bottom: 10px;
    }

    .product-form input,
    .product-form textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>
  <div class="product-form">
    <label for="product-name">Nombre del producto:</label>
    <input type="text" id="product-name" name="product-name" placeholder="Ingresa el nombre del producto">

    <label for="product-description">Descripción del producto:</label>
    <textarea id="product-description" name="product-description" placeholder="Ingresa la descripción del producto"></textarea>

    <label for="product-price">Precio del producto:</label>
    <input type="number" id="product-price" name="product-price" placeholder="Ingresa el precio del producto">

    <button type="submit">Guardar producto</button>
  </div>
</body>
</html>
