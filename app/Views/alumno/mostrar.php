<div class="container">
    <div class="row">
        <div class="col-12"></div>
            <h2>Alumnos</h2>

           

                <table class="table">
                    <thead>
                        <th>Nombre</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Sexo</th>
                    </thead>
<tbody>
            <?php foreach($alumnos as $alumno): ?>
            

    <tr>
        <td> <?=$alumno->nombre ?></td>
        <td> <?=$alumno->fechaNacimiento?> </td>
        <td> <?=$alumno->sexo?> </td>
    </tr>
    \    <?php endforeach ?>
</tbody>

                </table>

    </div>
</div>
</div>

<!DOCTYPE html>
<html>
<head>
    <title>Exportar Base de Datos</title>
</head>
<body>
    <a href="<?= base_url('baseDatos/exportar');?>" class="btn btn-primary">Exportar Base de Datos</a>
</body>
</html>