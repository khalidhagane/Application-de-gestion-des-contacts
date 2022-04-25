<?php
$display = "";

include 'class.php';
include 'head.php';
include 'navbar.php';

 $testobj = new User();
 $stmt=$testobj->afichage();
 

?>

<div class="d-flex flex-row justify-content-between ">
    <div><h1 class="fs-2">Contacts list:</h1></div>
    <div><a class="fs-5 fas btn text-light bg-dark" href="add_compte.php">Add Contacts</a></div>
   
</div>
<br>
<div>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Username:</th>
      <th scope="col">phone</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
  


    <?php foreach($stmt as $row){ ?>
    <tr class="bg-white ">
        
        <td> <?php echo $row['username'];?></td>
        <td> <?php echo $row['phone'];?></td>
        <td> <?php echo $row['email'];?></td>
        <td> <?php echo $row['address'];?></td>
        
        <td><a href='update.php?id=<?php echo $row['id'];?>' class="btn">update</a></td>
        <td><a href='delete.php?id=<?php echo $row['id'];?>' class="btn"> Delete</a></td>
        </tr>
   <?php }?>
  </tbody>
  </table>
</div>
</div>


<script src="main.js"></script>
</div>
</body>
</html>