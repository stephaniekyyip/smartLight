/*
  photoresistorLed.php

  Controls auto brightness mode.
  If on, runs the "photoresistor_w_led.py" script to adjust the LED brightness.
  Else, kills all Python scripts and turns LED off.
*/

<?php

if (isset($_GET ['enable'])){
  system("sudo killall python");
  system("sudo python /home/pi/photoresistor_w_led.py" );
  header('location:/index.php');
}

if (isset($_GET['disable'])){
  system("sudo killall python");
  system("gpio write 2 0");
  header('location:/index.php');
}
?>
