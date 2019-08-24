<?php include 'header.php' ?>
<section id="signup">

   <form action="registered.php" method="post">
      <input type="text" name="name" placeholder="Doctor's Name">
      <input type="text" name="email" placeholder="Doctor's email">
      <input type="password" name="pass" placeholder="password">
      <input type="submit" name="submit" value="Sign Up">
      <p>already registered? <a href="login.php">Login</a></p>
   </form>
</section>
<?php include 'footer.php' ?>