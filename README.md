# Smart Light System

For the final project in my Internet of Things course, I worked in a team to create a smart light system that allows the user to remotely control a LED bulb. 

My contribution to the project was mainly on the software side. I wrote Python scripts to turn on and off the LED and to adjust the LED brightness. I also wrote PHP scripts to execute the appropriate Python script depending on the user's response to the LED control options.

### Hardware Design
The LED bulb, along with a photoresistor, was connected to a Raspberry Pi. The photoresistor was used to determine the ambient brightness of the room in order to adjust the LED brightness accordingly. Additionally, a transistor was used with the LED's battery pack as a relay in order to adjust the LED brightness using the Pulse Width Modulation (PWM) output from the Raspberry Pi. 

The design of the smart light includes a lamp modified to hold the 12V LED bulb that plugs into the box that holds the Raspberry Pi and breadboard circuits. 

### Software Design
- User uses their device to connect to the Raspberry Pi via its IP address
- On the webpage, there is a HTML form that allows the user to select among the following options:
  - Turn the LED on or off
  - Choose among three brightness settings for the LED
  - Enable or disable auto brightness mode, in which the LED brightness is automatically determined by the ambient brightness in the room
- PHP script takes in the user input via HTTP and runs the appropriate Python script:
  - Turn LED on/ off: The "on" setting is the brightest LED setting. The "off" setting kills the currently running Python script.
  - Adjust brightness: Change the duty cycle of the PWM output (increase duty cycle to increase the brightness)
  - Auto brightness mode: Read input from photoresistor to determine amount of ambient light. Then increase the brightness when it is dark in the room and vice versa. 

### Hardware Components
- Raspberry Pi 3
- Photoresistor
- LED Bulb (12 V)
- 12V Battery Pack
- Transistor (12V MOSFET)
- 300Ω Resistor (Used with the transistor)
- 1µF Capacitor (Used as an analog to digital converter between the photoresistor and the Raspberry Pi)

### References
- [Web interface for the Raspberry Pi to control LEDs](http://www.instructables.com/id/Simple-and-intuitive-web-interface-for-your-Raspbe/?ALLSTEPS)
- [Using a capacitor to read photoresistor output for the Raspberry Pi](https://pimylifeup.com/raspberry-pi-light-sensor/)
  - [Another photoresistor resource](https://learn.adafruit.com/basic-resistor-sensor-reading-on-raspberry-pi/basic-photocell-reading)
- [PWM LED dimming on the Raspberry Pi](http://raspi.tv/2013/how-to-use-soft-pwm-in-rpi-gpio-pt-2-led-dimming-and-motor-speed-control)
- [PHP for the Raspberry Pi](http://www.raspberry-pi-geek.com/Archive/2014/07/PHP-on-Raspberry-Pi)
  - [Another PHP resource](http://www.pp4s.co.uk/main/gs-pi-remote.html)
  
#### For a more details on this project, please visit my website [here](http://stephaniekyyip.github.io/projects.html#smartLightProj).
