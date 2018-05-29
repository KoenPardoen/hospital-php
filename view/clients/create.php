
<form method="post" action="createSave"  >
  <h1>Create client</h1>
  <input type="text" placeholder="Firstname" name="client_firstname" required="">
  <input type="text" name="client_lastname" placeholder="Lastname" required="">
  <input type="text" name="mobile_number" placeholder="Phone" 
  minlength="10" maxlength="10" required="">
  <input type="text" name="email" placeholder="E-mail" required="">
  <input type="submit" value="Submit">
</form>
