<h2>Species</h2>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Description</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
		<?php 
			foreach ($species as $spec) {
		 ?>
			<tr>
				<td><?php echo $spec['species_id'];?></td>
				<td><?php echo $spec['species_description'] ?></td>
				<td class="center"><a href="<?= URL ?>species/edit/<?= $spec['species_id'] ?>">edit</a></td>
				<td class="center"><a href="<?= URL ?>species/delete/<?= $spec['species_id'] ?>">delete</a></td>
			</tr>

			<?php 	
				}
			 ?>
		</tbody>
	</table>
	<footer>
		<a href="<?= URL ?>species/create">create</a>	
	</footer>