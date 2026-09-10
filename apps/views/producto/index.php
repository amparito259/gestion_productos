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