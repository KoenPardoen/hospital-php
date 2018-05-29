 <h1>Edit client</h1>
  <form action="<?= URL ?>species/editSave" method="post">
  <input type="text" placeholder="Description" name="spec_description" 
  value="<?= $spec["species_description"]?>" >
  <input type="hidden" name="id" value="<?= $spec['species_id']; ?>">
  <input type="submit" value="Submit"> 
  </form>