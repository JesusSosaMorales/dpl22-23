#!/bin/bash

ssh arkania "
  cd /home/jesus/dpl22-23
  git pull
  cd Tema4/Ut-2/Django/travelroad
  source .venv/bin/activate
  pip install -r requirements.txt
  # python manage.py migrate
  # python manage.py collectstatic --no-input

  supervisorctl restart travelroad
"
