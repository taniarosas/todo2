<?php
//require the config file to get to the $path variable
require_once(__DIR__ . "/../model/config.php");
?>
<h1>Register</h1>
<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
    <div>
        <!--it labels the username-->
        <label for="username">Username:</label>
        <!--it creates a text box where you can input a single line with the text being visible-->
        <input type="text" name="username" />
    </div>

    <div>
        <!--it labels the password-->
        <label for="password">Password:</label>
        <!--it creates a text box where you can input a single line with the text not being visible-->
        <input type="password" name="password" />
    </div>

    <div>
        <!--it labels the submit button-->
        <button type="submit">Submit</button>
    </div>
</form>