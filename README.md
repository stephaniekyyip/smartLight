# Smart Light System

<img src = "https://github.com/stephaniekyyip/smartLight/blob/master/smartLightSetup.jpg?raw=true" width = 600px></img>

## Overview
For the final project in my Internet of Things course, I worked in a team to create a smart light system that allows the user to remotely control a LED bulb. I contributed to the software side of the project. 

## Hardware Design
<img src = "https://github.com/stephaniekyyip/smartLight/blob/master/smartLightElectronics.jpg?raw=true" width= 600px></img>

The LED bulb, along with a photoresistor, was connected to a Raspberry Pi. The photoresistor was used to determine the ambient brightness of the room in order to adjust the LED brightness accordingly. Additionally, a transistor was used with the LED's battery pack as a relay in order to adjust the LED brightness using the Pulse Width Modulation (PWM) output from the Raspberry Pi. 

The design of the smart light includes a lamp modified to hold the 12V LED bulb. The lamp plugs into the box that holds the Raspberry Pi and electronics, including the battery pack. An external USB battery pack is used to power the Raspberry Pi to make the set-up portable.

## Software Design
<img src = "https://github.com/stephaniekyyip/smartLight/blob/master/smartLightGUI.png?raw=true" width= 600px></img>

I used an Apache web server on the Raspberry Pi, PHP to handle the HTML form input and to call the appropriate Python scripts, and Python to control the LED (turn on/off, adjust brightness). 

## How the Smart Light Works
- User uses their device to connect to the Raspberry Pi via its IP address
- On the webpage, there is a HTML form that allows the user to select among the following options:
  - Choose among four brightness settings for the LED or turn the LED off (Manual Brightness Control)
  - Enable or disable auto brightness mode, in which the LED brightness is automatically determined by the ambient brightness in the room
- Upon user input, the PHP script runs the appropriate Python script to do one of the following:
  - Manual Brightness Control: Changes the duty cycle of the PWM output to adjust LED brightness.
  - Auto Brightness Mode: Reads input from photoresistor to determine amount of ambient light. Then, increases the LED brightness if it is dark in the room and vice versa.

## Software Dependencies
- Wiring Pi library: <code>git clone git://git.drogon.net/wiringPi</code>
- Apache server + PHP5 extension: <code>install apache2 php5 libapache2-mod-php5</code>

## Hardware Components
- Raspberry Pi 3
- Photoresistor
- LED Bulb (12 V)
- 12V Battery Pack
- Transistor (12V MOSFET)
- 300Ω Resistor (Used with the transistor)
- 1µF Capacitor (Used as an analog to digital converter between the photoresistor and the Raspberry Pi)

## Issues
I have included the code used in this project "as is", meaning that it is a quickly hacked together solution that allowed our project to work in time for our final class presentation. Despite this not being an elegant solution, I enjoyed bringing together both the hardware and software aspects of this project and creating a working prototype.

## References
- [Web interface for the Raspberry Pi to control LEDs](http://www.instructables.com/id/Simple-and-intuitive-web-interface-for-your-Raspbe/?ALLSTEPS)
- [Using a capacitor to read photoresistor output for the Raspberry Pi](https://pimylifeup.com/raspberry-pi-light-sensor/)
  - [Another photoresistor resource](https://learn.adafruit.com/basic-resistor-sensor-reading-on-raspberry-pi/basic-photocell-reading)
- [PWM LED dimming on the Raspberry Pi](http://raspi.tv/2013/how-to-use-soft-pwm-in-rpi-gpio-pt-2-led-dimming-and-motor-speed-control)
- [PHP for the Raspberry Pi](http://www.raspberry-pi-geek.com/Archive/2014/07/PHP-on-Raspberry-Pi)
  - [Another PHP resource](http://www.pp4s.co.uk/main/gs-pi-remote.html)
  
#### For more details on this project, visit my website [here](https://stephaniekyyip.github.io/projects/smartLight).
