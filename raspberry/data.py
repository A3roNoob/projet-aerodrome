#!/usr/bin/env python
# -*- coding: utf-8 -*-

import mysql.connector
import time
import datetime
import Adafruit_MCP9808.MCP9808 as MCP9808 # Import de la librairie du capteur
#import pdb

connect = mysql.connector.connect(host="meme.synology.me",user="dev",password="azertyuiop", database="projet")
cursor = connect.cursor() # Connexion à la db



sensor = MCP9808.MCP9808() # Constructeur de la classe du capteur
sensor.begin() # Démarre la communication avec le capteur

while True:
    nowDate = datetime.datetime.now()
    nowDate.strftime('%d-%m-%Y %H:%M:%S')
    temp = '%.1f' % sensor.readTempC() # Arrondi à un chiffre la valeur du capteur
    weatherQuery = """INSERT INTO weather(date, temp) VALUES (%s, %s)"""
    cursor.execute(weatherQuery, (nowDate, temp))
    connect.commit()
    time.sleep(10.0)


