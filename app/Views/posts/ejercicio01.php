<h1>Mostrar una tabla con el id del post, el nombre de la categoría, el nombre del
usuario de los posts publicados en el año 2023.</h1>

<br>


<table border="1" width="100%">
    <thead>
        <tr>
            <th>POST ID</th>
            <th>CATEGORIA</th>
            <th>PUBLICACIÓN</th>
            <th>USERNAME</th>
            <th>PUBLICACIÓN</th>
            
        </tr>
    </thead>

    <tbody>
    <?php foreach($posts as $post) : ?>
        <tr>
            <td><?= $post['POST ID']; ?></td>
            <td><?= $post['CATEGORIA']; ?></td>
            <td><?= $post['TITULO']; ?></td>
            <td><?= $post['NOMBRE DE USUARIO']; ?></td>
            <td><?= $post['created_at']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>


</table>

