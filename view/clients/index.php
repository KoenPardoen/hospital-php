	<h2>Clients</h2>
	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Phone</th>
				<th>Email</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
		<?php 
			foreach ($clients as $client) {
			
		 ?>
			<tr>
				<td><?php echo $client['client_firstname'];?></td>
				<td><?php echo $client['client_lastname'];?></td>
				<td><?php echo $client['mobile_number'];?></td>
				<td><?php echo $client['email'];?></td>
				<td class="center">
					<a href="<?= URL ?>clients/edit/<?php echo 
					$client["client_id"];?>">edit</a>
				</td>
				<td class="center">
					<a href="<?= URL ?>clients/delete/<?php echo 
					$client["client_id"];?>">delete</a>
				</td>
			</tr>
			<?php 	
				}
			 ?>
		</tbody>
	</table>

	<footer>
		<a href="<?= URL ?>clients/create">create</a>	
	</footer>
