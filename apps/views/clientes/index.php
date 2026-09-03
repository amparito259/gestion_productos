<h1>Listado de los clientes</h1>

<table border="2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Teléfono</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $cliente['id'] ?></td>
                <td><?= $cliente['nombre'] ?></td>
                <td><?= $cliente['documento'] ?></td>
                <td><?= $cliente['correo'] ?></td>
                <td><?= $cliente['telefono'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>