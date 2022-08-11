<!DOCTYPE html>
<html>
<body>
<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");




     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];

?>

<p><strong>Note:</strong> You might have to reload the page to see the new value of the cookie.</p>

</body>
</html>