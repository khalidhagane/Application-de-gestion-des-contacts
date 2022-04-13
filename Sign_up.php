<?php
$display = "";
include 'head.php';
include 'navbar.php';
?>

<main class="d-flex flex-row justify-content-evenly  flex-wrap">
<div class="">
      <img src="imag/contact.svg" alt="photo" style="width:90%; height: 330px;" >
    </div>
  <form action="" class="sign_in  d-flex flex-column gap-3 ">
    <div class="w-100 text-center">
      <h1 >sign_up</h1>
    </div>
      <div class=" mb-3 d-flex flex-column gap-2 mt-5"  >
        <!-- <label for="exampleFormControlInput1" class="form-label">Email address</label> -->
        <input type="text" class="form-control"  placeholder="Username">
        <input type="email" class="form-control"  placeholder="Email">
        <input type="password" class="form-control"  placeholder="Password">
        <input type="password" class="form-control"  placeholder="Password verify">
        <span>Forgot Password  ?</span>
      </div>

      <div>
        <button class="btn btn-secondary w-100"><a href="add_compte.php">Save</a></button>
      </div>
      
      <div>
        <span>Don’t have an account ?<a href="Sign_in.php ">Sign in </a></span>
      </div>
  
</form>



</main>

</body>
</html>