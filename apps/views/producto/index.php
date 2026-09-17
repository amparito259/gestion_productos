<h1>Listado de Productos</h1>
<?php if (!empty($producto)) { ?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria</th>
        <th>Descripcion</th>
        <th>Proveedor</th>
    </tr> 
<?php foreach ($productos as $product): ?>
    <tr>
        <td><?= $product['id'] ?? '' ?></td>
        <td><?= $product['nombre'] ?? '' ?></td>
        <td><?= $product['precio'] ?? '' ?></td>
        <td><?= $product['categoria'] ?? '' ?></td>
        <td><?= $product['descripcion'] ?? '' ?></td>
        <td><?= $product['proveedor_nombre'] ?? '' ?></td>
    </tr>
    <?php endforeach; ?>
</table>

    <?php } else { ?>
    <p>No hay productos disponibles.</p>
    <?php } ?>

<br><br>

<h1>Producto Consultado</h1>
<?php if (!empty($productoConsultados)) { ?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoría</th>
        <th>Descripción</th>
        <th>Proveedor</th>
    </tr>
 <?php foreach ($productoConsultado as $product): ?>
    <tr>
        <td><?= $product['id'] ?? '' ?></td>
        <td><?= $product['nombre'] ?? '' ?></td>
        <td><?= $product['precio'] ?? '' ?></td>
        <td><?= $product['categoria'] ?? '' ?></td>
        <td><?= $product['descripcion'] ?? '' ?></td>
        <td><?= $product['proveedor_nombre'] ?? '' ?></td>
    </tr>
    <?php endforeach; ?>
</table>

    <?php } else { ?>
    <p>No se encontraron productos consultados.</p>
    <?php } ?>

   