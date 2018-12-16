#   brighntessAdjust1.py
#
#   Manual brightness setting #1.
#   Changes LED duty cycle to 5%.

#!/usr/local/bin/python
# -*- coding: utf-8 -*-

import RPi.GPIO as GPIO
import time


GPIO.setmode(GPIO.BOARD)

led_pin = 13

#For LED
GPIO.setup(led_pin, GPIO.OUT) #set pin 11 to output
p = GPIO.PWM(led_pin,100) #set PWM output on led_pin to 100Hz
p.start(0) #Start led_pin with 0% duty cycle 


#Catch when script is interupted, cleanup correctly
try:
    # Main loop
    while True:
        p.ChangeDutyCycle(5)


except KeyboardInterrupt:
    pass

p.stop()
GPIO.cleanup()
