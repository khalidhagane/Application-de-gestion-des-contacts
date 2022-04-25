<?php
session_start();
$display = "";
include 'head.php';
include 'navbar.php';
?>

<div>
   
    <h4 class="text-dark mt-3 fs-2">Welcome, <b> <?php if(isset($_SESSION['username']))echo $_SESSION['username']; ?>! </b></h4> 
    <br>
    <p class="fs-4">Your profile:</p>

</div>
<div>
<div class="table-responsive">
  <table class="table">
  <!-- <thead>
    <tr>
      <th scope="col">Username:</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead> -->
  <tbody>
  <tr>
      <th scope="row">Username:</th>
      <td><h4 class="text-dark  fs-5"><b> <?php if(isset($_SESSION['username']))echo $_SESSION['username']; ?> </b></h4></td>
    </tr>
    <tr>
      <th scope="row">Last login:</th>
      <td><h4 class="text-dark  fs-5"><b> <?php if(isset($_SESSION['last_login']))echo $_SESSION['last_login']; ?> </b></h4></td>

    </tr>
   
    <tr>
      <th scope="row">sigsup date:</th>
      <td><h4 class="text-dark  fs-5"><b> <?php if(isset($_SESSION['sigsup_date']))echo $_SESSION['sigsup_date']; ?> </b></h4></td>
      
    </tr>
    
  </tbody>
  </table>
</div>
</div>


</div>
</body>
</html>