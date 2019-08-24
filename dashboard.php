<?php include 'header.php' ?>
<section class="dashboard">
   <div class="profile">
      <h1> Welcome, <p> </p></h1>
      <ul>
         <li><a href="new_patient.php">Add Patient</a></li>
         <li><a href="Record.php">Check Records</a></li>
         <li><a href="#">Log out</a></li>
      </ul>
   </div>

   <div class="report">
         <div class="reports">
            <div>
              <p><?php todaysDate(); ?></p>
            </div>

            <div>
               Week:  
            </div>

            <div>
               Month: 
            </div>


         </div>
         <div class="chart">
            charts here
         </div>
      </div>

   </div>
</section>










<? include 'footer.php' ?>


