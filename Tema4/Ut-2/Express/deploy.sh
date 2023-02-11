ssh arkania "
  cd /home/jesus/dpl22-23/;
  git pull;
  cd Tema4/Ut-2/Express/src/travelroad;
  npm install;
  pm2 restart travelroad --update-env;
"
