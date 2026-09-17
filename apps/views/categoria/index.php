<h2>Listado de Categorías de Cosméticos</h2>
<?php if (!empty($categoria)) { ?>
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

    <?php } else { ?>
    <p>No hay categorías de cosméticos disponibles.</p>
    <?php } ?>

        