<?php
$header = <<<navbar
<body class="d-flex flex-column gap-5">
<div class="header bg-dark">
    <div class=" d-flex flex-row justify-content-between px-4 align-items-center">
       <a href="index.php" class="text-light fw-bold navbar-brand">Contact list</a>
        <p></p>
        <ul class="d-flex list-unstyled m-0 ">
            <li><a href="profile.php" class="btn text-light fw-bold $display"> alex </a></li>
            <li><a href="contact.php" class="btn text-light fw-bold $display"> contact </a></li>
            <li><a href="#" class=" btn text-light fw-bold"><i class="fas fa-globe"></i> Login </a></li>
        </ul>
    </div>
</div>
<div class="px-4">
navbar;
echo $header;

// <a href="index.php"> <img src="imag/logo.jpg" alt="logo" height="70" width="80" class="py-1"></a>