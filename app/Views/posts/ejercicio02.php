<h2>2.Mostrar una tabla con el nombre del post y el nombre completo del autor de
la última categoría registrada en la base de datos.</h2>

<br>

<table border="1" width="100%">
    <thead>
        <tr>
            <th>Cateogoria</th>
            <th>Username</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td><?= $category['category']; ?></td>
            <td><?= $category['username']; ?></td>
        </tr>
    </tbody>
</table>