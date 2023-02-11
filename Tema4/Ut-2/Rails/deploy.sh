ssh arkania "
  cd /home/jesus/dpl22-23;
  git pull;
  cd Tema4/Ut-2/Rails/travelroad
  bin/rails assets:precompile
  passenger-config restart-app .
"
