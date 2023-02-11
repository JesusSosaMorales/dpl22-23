#!/bin/bash

ssh arkania "
  cd /home/jesus/dpl22-23;
  git pull;
  sudo -S  systemctl restart travelroad;
"
