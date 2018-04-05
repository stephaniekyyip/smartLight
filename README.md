# Smart Light System

For the final project in my Internet of Things course, I worked in a team to create a smart light system that allows the user to remotely control a LED bulb. 

My contribution to the project was mainly on the software side, which included writing Python scripts to turn on/ off the LED and adjust the LED brightness and writing PHP code to retrieve the user's LED control responses from a webpage.

### Smart Light Operation
- User uses their device to connect to the Raspberry Pi via its IP address
- On the webpage, there is a HTML form that allows user to select among the following options:
  - Turn the LED on or off
  - Choose among three brightness settings for the LED
  - Enable or disable auto brightness mode, in which the LED brightness is automatically determined by the ambient brightness in the room
- PHP script takes in the user input via HTTP and runs the appropriate Python script:
  - Turn LED on/ off: The "on" setting is the brightest LED setting. The "off" setting kills the currently running Python script.
  - Adjust brightness: Change the duty cycle of the Pulse Width Modulation (PWM) output (increase duty cycle to increase the brightness)
  - Auto brightness mode: Read input from photoresistor to determine amount of ambient light. Then increase the brightness when it is dark in the room and vice versa. 
