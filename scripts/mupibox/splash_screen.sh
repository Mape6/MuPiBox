#!/bin/sh
#
# Service: Start Splash

CONFIG="/etc/mupibox/mupiboxconfig.json"
START_SPLASH=`/usr/bin/jq -r .mupibox.startSplash ${CONFIG}`

/usr/bin/python3 /usr/local/bin/mupibox/telegram_start.py
/usr/bin/fbv ${START_SPLASH}