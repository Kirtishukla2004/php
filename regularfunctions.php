<!DOCTYPE html>
<html>
<body>

<?php
$str = "the man on street are all cool";
$pattern = "/man/i";
echo preg_replace($pattern, "men", $str);
echo preg_match_all($pattern, $str);
echo preg_match($pattern,$str);
?>

</body>
</html>