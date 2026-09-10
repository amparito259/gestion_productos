<h1>Listado de productos</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoría</th>
        <th>Proveedor</th>
    </tr>

    <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?= $producto['id'] ?></td>
            <td><?= $producto['nombre'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td><?= $producto['categoria'] ?></td>
            <td><?= $producto['proveedor_nombre'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>


<h1>Producto consultado</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoría</th>
        <th>Proveedor</th>
    </tr>
   
        <tr>
            <td><?= $productoConsultado['id'] ?></td>
            <td><?= $productoConsultado['nombre'] ?></td>
            <td><?= $productoConsultado['precio'] ?></td>
            <td><?= $productoConsultado['categoria'] ?></td>
            <td><?= $productoConsultado['proveedor_nombre'] ?></td>
        </tr>
   
</table>