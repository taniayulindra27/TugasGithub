<?php

require_once "env.php";

if (isset($_SESSION['email'])) {
    require_once "layouts/index.php";    
}else{
    require_once "layouts/login.php";    
}
