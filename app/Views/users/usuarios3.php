<table border="1" width="100%">
    <thead>
        <tr>
            <th>USUARIO</th>
           
            <th>NOMBRE REAL</th>
            <th>CONTRASEÑA</th>
            <th>ESTADO DEL USUARIO</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach($usuarios as $usuario) : ?>
        <tr>
            <td><?= $usuario['username']; ?></td>
            <td><?= $usuario['name']. ' ' .$usuario['lastname']?></td>
            <td><?= $usuario['password']; ?></td>
            
            <?php if ($usuario['status'] == 1): ?>
                <td>Activo</td>
            <?php else : ?>
                <td>Inactivo</td>
            <?php endif ?>
        </tr>
    <?php endforeach; ?>
    </tbody>

    <tfoot>
        <tr>
            <th>USUARIO</th>
            <th>CONTRASEÑA</th>
            <th>ESTADO DEL USUARIO</th>
        </tr>
    </tfoot>
</table>