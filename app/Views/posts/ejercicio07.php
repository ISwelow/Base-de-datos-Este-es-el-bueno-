<h2>Mostrar una tabla con los siguientes datos: Cantidad de posts escritos por
mujeres en el año 2022, cantidad de posts escritos por hombres en el 2022,
cantidad de posts escritos por mujeres en el 2023, cantidad de posts escritos
por hombres en el 2023. Si la cantidad de posts escritos por mujeres es
menor en el 2023 en comparación con el año 2022 entonces mostrar la celda
en color rojo con texto blanco. En contraste, si la cantidad del año 2023 es
superior a la del 2022 entonces colorear de verde con texto blanco. Si la
cantidad de posts escritas en el año 2022 es igual al año 2023 entonces no
modificar su formato y estilo. Aplican las mismas condiciones de formato
para los posts escritos por hombres.
</h2>

<table border="1">
	<tr>
		<td>Escrito por</td>
		<td>Posts del 2022</td>
		<td>Posts del 2023</td>
	</tr>
	<tr>
		<td>Mujeres</td>

		<td>
			<?php foreach($postsEscritosPorMujeres2023 as $pepm23): ?>
				<?= $pepm23['pepm23'] ?>
			<?php endforeach; ?>
		</td>



	<?php if ($postsEscritosPorMujeres2023 > $postsEscritosPorMujeres2022) : ?>

		<td style="background-color: red; color: white">
			<?php foreach($postsEscritosPorMujeres2022 as $pepm22): ?>
				<?= $pepm22['pepm22'] ?>
			<?php endforeach; ?>
		</td>
	<?php elseif ($postsEscritosPorMujeres2023 < $postsEscritosPorMujeres2022) : ?>
		<td style="background-color: green; color: white">
			<?php foreach($postsEscritosPorMujeres2022 as $pepm22): ?>
				<?= $pepm22['pepm22'] ?>
			<?php endforeach; ?>
		</td>
	<?php else : ?>
		<td>
			<?php foreach($postsEscritosPorMujeres2022 as $pepm22): ?>
				<?= $pepm22['pepm22'] ?>
			<?php endforeach; ?>
		</td>
	<?php endif; ?>
	
				
	</tr>
	<tr>
		<td>Hombres</td>
		<td>
			<?php foreach($postsEscritosPorHombres as $peph): ?>
				<?= $peph['peph'] ?>
			<?php endforeach; ?>
		</td>
		<td>Por definir</td>
		
	</tr>
</table>


<hr>

<ul>
	<?php foreach ($postsEscritosPorMujeres2 as $x): ?>
		<li><?= '[' . $x['creado'] . '] ' . $x['titulo'] ?></li>	
	<?php endforeach; ?>
	
</ul>
