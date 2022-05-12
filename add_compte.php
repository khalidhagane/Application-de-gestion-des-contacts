<?php

include 'user.php';
include 'head.php';
include 'navbar.php';

if(isset($_POST['sent'])){
    
  $testobj = new User();
  $testobj->addContact($_POST['username'], $_POST['phone'] ,$_POST['email'],$_POST['addres'], $_POST['fk_user']);
  
  header('location: contact.php');
  }
?>

<main class="d-flex flex-row justify-content-evenly  flex-wrap">
<div class="">
      <img src="imag/contact.svg" alt="photo" style="width:90%; height: 330px;" >
    </div>
  <form action="add_compte.php" method="post" class="sign_in  d-flex flex-column gap-3 ">
    <div class="w-100 text-center">

      <p class="fs-3 text-start m-0">Add contact:</p>
    </div>
      <div class=" mb-3 d-flex flex-column gap-2 "  >
        
        <input type="text" name="username" class="form-control"  placeholder="Username" >

        <input type="tel" name="phone" class="form-control"  placeholder="Phone" >
        
        <input type="email" name="email" class="form-control"  placeholder="Email" >
        
        <textarea class="form-control" name="addres" placeholder="Address" rows="3"></textarea >
      </div>
      

      <div>
      <input type="submit"  name="sent" id="submit_btn" class="btn btn-secondary w-100 text-light " value="submit" >
      </div>
      
  
</form>



</main>

</body>
</html>