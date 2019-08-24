<?php include 'header.php' ?>

<section id="add_new_patient">
<h1>Add new patient</h1>
  <form action="Record.php" method="post">
    <input type="text" name="patientName" placeholder="Patient Name">
    <input type="text" name="patientEmail" placeholder="email">
    <select class="gender" name="gender">
      <option value="m">male</option>
        <option value="f">female</option>
    </select>
    <input type="text" name="patientNum" placeholder="Phone no">
    <input type="text" name="patient" placeholder="nature of illness">
    <input type="submit" name="save" value="Save">
  </form>

</section>

<? include 'footer.php' ?>
 
