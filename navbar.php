<?php
$header = <<<navbar
<body class="d-flex flex-column gap-5">
<div class="header bg-dark">
    <div class=" d-flex flex-row justify-content-between px-4 align-items-center">
        <a href="index.php"> <img src="imag/logo.jpg" alt="logo" height="70" width="80" class="py-1"></a>
        <ul class="d-flex list-unstyled m-0 ">
            <li><a href="#" class="btn text-light fw-bold $display"> alex </a></li>
            <li><a href="#" class="btn text-light fw-bold $display"> contact </a></li>
            <li><a href="#" class=" btn text-light fw-bold"><i class="fas fa-globe" style="color : #F4CF1B"></i> list </a></li>
        </ul>
    </div>
</div>
navbar;
echo $header;