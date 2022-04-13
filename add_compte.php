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
      <span >contacts</span>
      <span>Contact list:</span>
      <span>No contact.</span>
      <span>Add contact:</span>
    </div>
      <div class=" mb-3 d-flex flex-column gap-2 "  >
        <div class="  d-flex flex-column gap-2 ">
        <input type="text" class="form-control"  placeholder="Username">
        <input type="tel" class="form-control"  placeholder="Phone">
        </div>
        <input type="email" class="form-control"  placeholder="Email">
        <input type="password" class="form-control"  placeholder="Password">
        <textarea class="form-control" placeholder="Address" rows="3"></textarea>
        
        
      </div>

      <div>
        <button class="btn btn-secondary w-100">Save</button>
      </div>
      
      <div>
        
      </div>
  
</form>



</main>

</body>
</html>