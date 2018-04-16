/*
  index.php

  Homepage of the web server.
  Accepts user input for the different LED settings and redirects to the other
  PHP files accordingly.
  
*/


<font size = "6">IoT Smart Light Control</font>
<br/>

<br/>
<font size = "4">Auto LED Brightness Adjustment Mode</font>
<br/>
<form method = "GET" action = "photoresistorLed.php" >
LED 1:
<input type = "submit" style = "background-color: #FFCC11" value = "Enable" name = "enable">
<input type = "submit" style = "color: white; background-color: #A02422" value = "Disable" name = "disable">
</form>

<font size = "4">Manual Brightness Control</font>
<form method = "GET" action = "brightnessAdjust.php">
LED 1:
<input type = "submit" style = "background-color: #FFF9BC" value = "1" name = "bright1">
<input type = "submit" style = "background-color: #FFF377" value = "2" name = "bright2">
<input type = "submit" style = "background-color: #FFE900" value = "3" name = "bright3">
<input type = "submit" style = "background-color: #FFCC11" value = "4" name = "bright4">
<input type = "submit" style = "color: white; background-color: #A02422" value = "OFF" name = "off">
</form>
