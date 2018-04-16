/*
  brightnessAdjust.php

  Controls the manual brightness settings.
  Runs the specified "brightnessAdjust#.py" script, where # corresponds to the
  numbered brightnes setting chosen by the user.

*/


<?php

if (isset($_GET['bright1'])){
  system("sudo killall python");
  system("sudo python /home/pi/brightnessAdjust1.py");
  header('location:/index.php');
}

if (isset($_GET['bright2'])){
  system("sudo killall python");
  system("sudo python /home/pi/brightnessAdjust2.py");
  header('location:/index.php');
}

if (isset($_GET['bright3'])){
  system("sudo killall python");
  system("sudo python /home/pi/brightnessAdjust3.py");
  header('location:/index.php');
}

if (isset($_GET['bright4'])){
  system("sudo killall python");
  system("sudo python /home/pi/brightnessAdjust4.py");
  header('location:/index.php');
}

if (isset($_GET['off'])){
  system("sudo killall python");
  system("gpio write 2 0");
  header('location:/index.php');
}



?>
