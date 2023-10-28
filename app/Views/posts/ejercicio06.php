<h2>Mostrar una tabla con los siguientes datos: cantidad total de posts por
categoría, cantidad total de posts escritos por autor.</h2>
<table border="1">
	<tr>
		<td>Posts por categoría</td>
		<td>Posts por autor</td>
	</tr>
	<tr>
		<td>
			<?php foreach($postsPorCategoria as $ppc): ?>
				
				<?= $ppc['ppc'] . ' - ' . $ppc['ccategory'] . '<br />' ?>

			<?php endforeach; ?>
		</td>

		<td>
			<?php foreach($postsPorAutor as $ppa): ?>
				<?= $ppa['ppa'] ?>
			<?php endforeach; ?>
		</td>

		
	</tr>
</table>