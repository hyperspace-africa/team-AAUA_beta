<?php include 'header.php' ?>

<div id="login">
 <form action="dashboard.php" method="post">
    <input type="text" name="email" placeholder="email">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="submit" value="Login">
    <p>new user? sign up <a href="signup.php">Here</a></p>
   </form>
</div>

<?php include 'footer.php' ?>