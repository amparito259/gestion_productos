<h2>Listado de Proveedores</h2>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Dirección</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($proveedores as $item): ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['nombre'] ?></td>
            <td><?= $item['ciudad'] ?></td>
            <td><?= $item['direccion'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>