<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
         // Output Monday
        fwrite(STDOUT, "Monday \n");
        break;
     case 2:
         // Output Tuesday
	    fwrite(STDOUT, "Tuesday \n");
	    break;
     case 3:
     	fwrite(STDOUT, "Wednesday \n");
     	break;
     case 4:
     	fwrite(STDOUT, "Thursday \n");
     	break;
     case 5:
     	fwrite(STDOUT, "Friday \n");
     	break;
     case 6:
     	fwrite(STDOUT, "Saturday \n");
     	break;
     case 7:
     	fwrite(STDOUT, "Sunday \n");
     	break;
 }
if ($dayOfWeek == 1){
	echo "Monday\n";
} elseif ($dayOfWeek == 2) {
	echo "Tuesday\n";
}elseif ($dayOfWeek == 3) {
	echo "Wednesday\n";
} elseif ($dayOfWeek == 4) {
	echo "Thursday\n";
} elseif ($dayOfWeek == 5) {
	echo "Friday\n";
} elseif ($dayOfWeek == 6) {
	echo "Saturday\n";
} elseif ($dayOfWeek == 7) {
	echo "Sunday\n";
} else {
	echo "Error";
}
?>