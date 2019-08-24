<?php include 'header.php' ?>
<?php
if(isset($_POST['save'])){ ?>
<section id="records">
<h1>Records</h1>
  <div>
    <h5><?php echo $_POST['patientName']; ?></h5>
  </div>

</section>

 <?php } ?>

<?php include 'footer.php' ?>