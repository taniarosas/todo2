<?php
//it is pointing to config file
require_once(__DIR__ . "/../model/config.php");
//require_once(__DIR__ . "/../controller/login-verify.php");
//if (!authenticateUser()) {
   // header("Location: " . $path . "index.php");
   // die();
//}
?>
<nav>
    <ul>
        <!-- it makes a link called Blog Post Form -->
        <li><a href="<?php echo $path . "login.php"?>"> Log In</a></li>
        <li><a href="<?php echo $path . "register.php"?>"> Register</a></li>
    </ul>
</nav>