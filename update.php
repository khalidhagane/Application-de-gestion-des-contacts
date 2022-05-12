<?php

include 'user.php';
include 'head.php';
include 'navbar.php';


$id = $_GET['id'];
$testobj = new User();
$row = $testobj -> getacffichage($id);

if(isset($_POST['Update'])){
  
  $testobj->editContact($_POST['username'], $_POST['phone'],$_POST['email'] ,$_POST['addres'],$_GET['id']);
  header('location: contact.php');
  
  }
?>

<main class="d-flex flex-row justify-content-evenly  flex-wrap">
<div class="">
      <img src="imag/contact.svg" alt="photo" style="width:90%; height: 330px;" >
    </div>
  <form  method="post" class="sign_in  d-flex flex-column gap-3 ">
    <div class="w-100 text-center">
      
      <p class="fs-3 text-start m-0">Add contact:</p>
    </div>
      <div class=" mb-3 d-flex flex-column gap-3 "  >
        
        <input type="text" name="username" class="form-control"  placeholder="Username" value="<?php echo $row['username']; ?>">

        <input type="tel" name="phone" class="form-control"  placeholder="Phone" value="<?php echo $row['phone']; ?>">
        
        <input type="email" name="email" class="form-control"  placeholder="Email" value="<?php echo $row['email']; ?>">
        
        <input type="text" name="addres" class="form-control"  placeholder="Email" value="<?php echo $row['address']; ?>">
        
      </div>

      <div>
      <input type="submit"  name="Update" id="submit_btn" class="btn btn-secondary w-100 text-light " value="submit" >
      </div>
      
  
</form>



</main>

</body>
</html>