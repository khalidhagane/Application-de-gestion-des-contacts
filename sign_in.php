<?php
 
$display = "d-none";

include 'class.php';
include 'head.php';
include 'navbar.php';
?>

<?php

if(isset($_POST['sent'])){
  
  $testobj = new User();
  $testobj->sign_in($_POST['email'],$_POST['password']);
  
  }
?>

<main class="d-flex flex-row justify-content-evenly  flex-wrap">
<div class="">
      <img src="imag/contact.svg" alt="photo" style="width:90%; height: 330px;" >
    </div>
  <form action="Sign_in.php" id="form"  method="post"class="sign_in d-flex flex-column gap-3 ">
    <div class="w-100 text-center">
      <h1 >sign_in</h1>
    </div>
   
      <div class=" mb-3 d-flex flex-column gap-2 mt-5"  >
      
        <input type="email"  name="email"class="form-control" id="email" placeholder="Email">
        

        <input type="password" name="password" class="form-control" id="password1" placeholder="password">
        

        <span>Forgot Password  ?</span>
      </div>
      <div>
      <input type="submit"  name="sent" id="submit_btn" class="btn btn-secondary w-100 text-light " value="submit" >
      </div>
      
      <div>
        <span>Don’t have an account ?<a href="Sign_up.php ">Sign up </a></span>
      </div>
  
</form>

</main>
<script src="main.js"></script>
</body>
</html>


<?php 

  ?>




