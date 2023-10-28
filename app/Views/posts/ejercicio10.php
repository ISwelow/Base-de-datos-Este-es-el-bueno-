<h2>10.	En una tabla, mostrar el último post escrito por cada mujer menor de 30 años y 
el primer post escrito por cada hombre mayor de 16 años.</h2>

<table border="1">
<thead>
    <tr>
        <td>Usuario</td>
        <td>Genero</td>
        <td>Fecha de nacimiento</td>
        <td>Id de post</td>
    </tr>
</thead>

    <?php foreach ($postsM as $posts): ?>
        <tr>
            <td><?= $posts['username']; ?></td>
            <td><?= $posts['gender']; ?></td>
            <td><?= $posts['birthday']; ?></td>
            <td><?= $posts['ultimoPost']; ?></td>
        </tr>
    <?php endforeach; ?>

    <?php foreach ($postsH as $posts): ?>
        <tr>
            <td><?= $posts['username']; ?></td>
            <td><?= $posts['gender']; ?></td>
            <td><?= $posts['birthday']; ?></td>
            <td><?= $posts['primerPost']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>