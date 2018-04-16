#
#   photoresistor_w_led.py
#
#   Reads the output from photoresistor using a capacitor as an ADC.
#   Changes LED brightness by varying the duty cycle depending on the
#   amount of ambient light detected by the photoresistor.

#!/usr/local/bin/python
# -*- coding: utf-8 -*-

import RPi.GPIO as GPIO
import time

__author__ = 'Gus (Adapted from Adafruit)'
__license__ = "GPL"
__maintainer__ = "pimylifeup.com"

GPIO.setmode(GPIO.BOARD)

pin_to_circuit = 7 #to control photoresistor
led_pin = 13

#For LED
GPIO.setup(led_pin, GPIO.OUT) #set pin 11 to output
p = GPIO.PWM(led_pin,100) #set the PWM for LED to 50%
p.start(100) #I don’t remember what this does but trust me, you need it.

def rc_time (pin_to_circuit):
    count = 0

    #Output on the pin for photoresistor
    GPIO.setup(pin_to_circuit, GPIO.OUT)
    GPIO.output(pin_to_circuit, GPIO.LOW)
    time.sleep(0.1)

    #Change the pin back to input for photoresistor
    GPIO.setup(pin_to_circuit, GPIO.IN)

    #Count until the pin goes high
    while (GPIO.input(pin_to_circuit) == GPIO.LOW):
        count += 1

    return count

#Catch when script is interupted, cleanup correctly
try:
    # Main loop
    while True:
        light_value = rc_time(pin_to_circuit)

        if light_value > 1000:
            p.ChangeDutyCycle(100)
        elif light_value > 200:
            p.ChangeDutyCycle(30)
        else:
            p.ChangeDutyCycle(10)

        time.sleep(1)
        #print light_value

except KeyboardInterrupt:
    pass

p.stop()
GPIO.cleanup()
