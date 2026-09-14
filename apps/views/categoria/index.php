<h2>Listado de Categorías de Cosméticos</h2>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categorias as $item): ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['nombre'] ?></td>
            <td><?= $item['descripcion'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>