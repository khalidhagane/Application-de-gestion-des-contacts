<?php
$display="d-none";
include 'user.php';
include 'head.php';
include 'navbar.php';

if(isset($_POST['sent'])){
    if($_POST['password1']==$_POST['password2']){
    
        $testobj = new User();
        $testobj->sign_up($_POST['username'],$_POST['email'],$_POST['password1']);

        $_SESSION['username'] = $_POST['username'];
        
        date_default_timezone_set("Africa/Casablanca");
        
        $_SESSION['last_login'] = date("l , d M  Y H:i:s A");
        $_SESSION['sigsup_date'] = date("l , d M  Y H:i:s A");
    }
}
?>

<main class="d-flex flex-row justify-content-evenly  flex-wrap">
    <div class="">
                    <img src="imag/contact.svg"  alt="photo" style="width:90%; height: 330px;" >
                </div>
            <div>
                <form action="Sign_up.php"  id="form" method="post" class="sign_in d-flex flex-column gap-3 " >
                    <div class="w-100 text-center">
                    <h1 >sign_up</h1>
                    </div>

                    <span class="errorPss" ></span>
                    
                    <div class=" mb-3 d-flex flex-column gap-2 mt-3"  >
                        
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                        <span class="errorU" ></span>
                        
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        <span class="errorE"></span>
                        
                        <input type="password" name="password1" class="form-control" id="password1" placeholder="Password">
                        <span class="errorP1" ></span>

                        <input type="password"  name="password2"class="form-control" id="password2" placeholder="Password verify">
                        <span class="errorP2" ></span>

                        <span>Forgot Password ?</span>
                    </div>
                    <div>
                        <input type="submit"  name="sent" id="submit_btn" class="btn btn-secondary w-100 text-light " value="submit" >
                    </div>
                </form>

            <br>
            <div>
                    <span>Don’t have an account ?<a href="Sign_in.php ">Sign in </a></span>
                </div>
    </div>

</main>
<script src="main.js"></script>
</body>
</html>

<?php

?>
