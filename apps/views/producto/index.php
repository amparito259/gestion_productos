<h1>Listado de productos</h1>

<table border="1">
    <tr>
         <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoría</th>
    </tr>

    <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?= $producto['id'] ?></td>
            <td><?= $producto['nombre'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td><?= $producto['categoria'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>