<?php
$title = 'Index';
require_once 'includes/header.php';
?>
<!--
    - First name
    - Last name
    - Date of Birth (Use Datepicker)
    - Specialty (Database Admin, Software Developer, Web Administrator, Other)
    - Email Address
    - Contact Number
-->
<h1 class="text-center">Registration for IT Conference </h1>

<form>
  <div class="form-group">
    <label for="formGroupExampleInput">First Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input First Name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Last Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Input Last Name">
    <div>
    <label for="formGroupExampleInput2">Date of Birth</label>
        <input type="datetime-local" id="Test_DatetimeLocal">
    </div>
    <div>
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Specialty</label>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
        <option selected>Choose...</option>
        <option value="1">Database Admin</option>
        <option value="2">Software Developer</option>
        <option value="3">Web Administrator</option>
        <option value="4">Other</option>
  </select>
  </div>
  <label for="formGroupExampleInput">Email Adrress</label>
    <input type="Email" class="form-control" id="formGroupExampleInput" placeholder="Your Email">
  <label for="formGroupExampleInput">Contact Number</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Contact Number">
  <div class="text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<?php require_once 'includes/footer.php' ?>