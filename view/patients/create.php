
<form method="post" action="createSave"  >
  <h1>Create patiënt</h1>
  <input type="text" placeholder="patiënt name" name="patientName" required>
 	<select name="species">
	<?php foreach ($species as $spec): ?>
 		<option value="<?= $spec['species_id'] ?>"><?= $spec['species_description']?></option>
 		<?php endforeach ?>
 	</select>


  <input type="text" name="patientStatus" 
  placeholder="status" maxlength="100" required>
  <select name="client" >

  	<?php foreach ($clients as $client): ?>
  	<option value="<?= $client['client_id'] ?>"><?= $client['client_firstname'].' '.$client['client_lastname'] ?></option>
  	<?php endforeach ?>
  </select>

  <input type="submit" value="Submit">
</form>

