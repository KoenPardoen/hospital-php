<h2>Patiënts</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Client</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<?php 
		foreach ($patients as $patient) {
	 ?>
			<tr>
				<td><?php echo $patient['patient_name']; ?></td>
				<td><?php echo $patient['species_description']; ?></td>
				<td><?php echo $patient['patient_status']; ?></td>
				<td><?php echo $patient['client_firstname'] . " "; echo $patient['client_lastname']; ?></td>
				<td class="center"><a href="<?= URL ?>patients/edit/<?= $patient['patient_id']; ?>">edit</a></td>
				<td class="center"> <a href="<?= URL ?>patients/delete/<?= $patient['patient_id']; ?>">delete</a></td>
			</tr>
			<?php 
				}
			 ?>
		</tbody>
	</table>
		<footer>
			<a href="<?= URL ?>patients/create">create</a>
		</footer>