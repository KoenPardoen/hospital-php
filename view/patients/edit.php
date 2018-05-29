
<form method="post" action="<?= URL ?>patients/editSave"  >
  <h1>Create patiënt</h1>
  <input type="text" value="<?= $patients["patient_name"]?>" placeholder="patiënt name" name="patientName" required>
 	<select name="species">
	<?php foreach ($species as $spec): ?>
 		<option value="<?= $spec['species_id'] ?>" <?php if($patients['species_id'] === $spec['species_id']){ echo "selected";} ?>><?= $spec['species_description']?></option>
 		<?php endforeach ?>
 	</select>


  <input type="text" value="<?= $patients["patient_status"]?>" name="patientStatus" 
  placeholder="status" maxlength="100" required>
  <select name="client" >

  	<?php foreach ($clients as $client): ?>
  	<option value="<?= $client['client_id'] ?>" <?php if($patients['client_id'] === $client['client_id']){ echo "selected";} ?>><?= $client['client_firstname'].' '.$client['client_lastname'] ?></option>
  	<?php endforeach ?>
  </select>
  <input type="hidden" name="id" value="<?= $patients['patient_id'] ?>">

  <input type="submit" value="Submit">
</form>

