<?php
$today = date("D");
switch($today){
    case "Mon":
        echo "pakainfo - Today is Monday. it is a procastination day ;/.";
        break;
    case "Tue":
        echo "infinityknow - Today is Tuesday. Buy some food.";
        break;
    case "Wed":
        echo "simple-jquery - Today is Wednesday. Visit a doctor.";
        break;
    case "Thu":
        echo "ministackoverflow - Today is Thursday. Repair your car.";
        break;
    case "Fri":
        echo "PHP - Today is Friday. Party tonight.";	
        break;
    case "Sat":
        echo "Laravel - Today is Saturday. Its movie time.";
        break;
    case "Sun":
        echo "Vuejs- Today is Sunday. Do some Shopping.";
        break;
    default:
        echo "Sorry, No SOME information Pure available for that day.";
        break;
}
?>


