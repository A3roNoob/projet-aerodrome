#!/usr/bin/env python
# -*- coding: utf-8 -*-

import mysql.connector
import time
import datetime
import smbus

#import pdb

connect = mysql.connector.connect(host="meme.synology.me",user="dev",password="azertyuiop", database="projet")
cursor = connect.cursor() # Connexion à la db

bus = smbus.SMBus(1)
addressTemp = 0x04
addressHum = 0x06
addressSpeed = 0x08


while True:
    nowDate = datetime.datetime.now()
    nowDate.strftime('%d-%m-%Y %H:%M:%S')
    temp = bus.read_byte(addressTemp)
    humidity = bus.read_byte(addressHum)
    speed = bus.read_byte(addressSpeed)
    weatherQuery = """INSERT INTO weather(date, temp, humidity, windspeed) VALUES (%s, %s, %s, %s)"""
    cursor.execute(weatherQuery, (nowDate, temp, humidity, speed))
    connect.commit()
    time.sleep(10.0)


