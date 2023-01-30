#!/bin/bash

cd /home/jesus/dpl22-23/Tema4/Ut-2/Spring/travelroad/


./mvnw package  # el empaquetado ya incluye la compilación

# ↓ Último fichero JAR generado
JAR=`ls target/*.jar -t | head -1`
/usr/bin/java -jar $JAR
