<h1>Listado Proveedores</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Ciudad</th>
        <th>Dirección</th>
    </tr>
    <?php foreach ($proveedores as $proveedor): ?>
    <tr>
        <td><?= $proveedor['id_proveedor'] ?></td>
        <td><?= $proveedor['nombre'] ?></td>
        <td><?= $proveedor['ciudad'] ?></td>
        <td><?= $proveedor['direccion'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>