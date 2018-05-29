 <h1>Edit client</h1>
  <form action="<?= URL ?>clients/editSave" method="post">
  <input type="text" placeholder="Firstname" name="client_firstname" 
  value="<?= $client["client_firstname"]?>" required>
  <input type="text" name="client_lastname" placeholder="Lastname" 
  value="<?= $client["client_lastname"]?>" required>
  <input type="text" name="mobile_number" placeholder="Phone" 
  maxlength="10" value="<?= $client["mobile_number"]?>" required>
  <input type="text" name="email" placeholder="E-mail" 
  value="<?= $client["email"]?>" required>
  <input type="hidden" name="id" value="<?= $client['client_id']; ?>">
  <input type="submit" value="Submit"> 
  </form>