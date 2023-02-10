![...](Spring/img/springlogo.png)

## Indice

- [Introduccion](#introduccion)
- [Instalación](#instalación)
- [Aplicación](#aplicacion)
- [Escritura de código](#escritura-de-código)
- [Proceso de construcción](#proceso-de-construcción)
- [Entorno de producción](#entorno-de-producción)
- [Script de despliegue](#script-de-despliegue)
- [Resultados](#resultados)
- [Enlace aplicación](#enlace-aplicacion)
- [Conclusiones](#conclusiones)






## Introduccion

Spring es uno de los frameworks más populares y ampliamente utilizados para el desarrollo de aplicaciones Java. Fue creado en 2003 por Rod Johnson y desde entonces ha evolucionado para convertirse en una de las plataformas de desarrollo más completas y maduras disponibles.

Spring es un framework de inversión de control (IoC) y un framework de arquitectura de aplicaciones, lo que significa que proporciona una estructura de desarrollo y una serie de herramientas para ayudar a los desarrolladores a crear aplicaciones más eficientes y escalables.

Además, Spring ofrece una gran cantidad de características y herramientas para mejorar la seguridad, el rendimiento y la eficiencia de las aplicaciones, incluyendo la gestión de dependencias, el enrutamiento de peticiones, la integración de bases de datos, la seguridad de aplicaciones y la gestión de transacciones.

Otro aspecto destacado de Spring es su amplia comunidad de desarrolladores y su gran cantidad de paquetes y librerías disponibles, lo que facilita la implementación de funcionalidades y mejora la productividad de los desarrolladores.

## Instalación

### JDK

Lo primero será instalar el Java Development Kit (JDK). Existe una versión "opensource" denominada OpenJDK.

Descargamos el paquete OpenJDK desde su página de descargas:
![...](Spring/screenshots/1.png)

Ahora descomprimimos el contenido del paquete en /usr/lib/jvm:

![...](Spring/screenshots/2.png)

Tener en cuenta que la última versión disponible puede variar en el tiempo.

Comprobamos que todo ha ido bien y que el contenido del paquete está disponible:

![...](Spring/screenshots/3.png)

Necesitamos realizar alguna configuración adicional para que el JDK funcione correctamente.

Por un lado establecer variables de entorno adecuadas a la instalación. Básicamente indicar dónde se encuentran los ejecutables de Java modificando la variable de entorno PATH:

![...](Spring/screenshots/5.png)

Contenido:

![...](Spring/screenshots/4.png)


Por otro lado actualizar las alternativas para los ejecutables:

![...](Spring/screenshots/6.png)

Por lo tanto disponemos de:
- javac → es el compilador del lenguaje de programación Java.
- java → es la herramienta para ejecutar programas escritos en Java.

Ahora ya podemos comprobar las versiones de las herramientas instaladas:

![...](Spring/screenshots/7.png)

En este punto se debe cerrar la sesión y volver a abrirla para que los cambios se apliquen correctamente.


### SDKMAN

SDKMAN es una herramienta que permite gestionar versiones de kits de desarrollo de software (entre ellos Java).

Para su instalación debemos comprobar que tenemos el paquete zip instalado en el sistema:
![...](Spring/screenshots/8.png)
Ahora ejecutamos el siguiente script de instalación:

![...](Spring/screenshots/9.png)
A continuación activamos el punto de entrada de la siguiente manera:

![...](Spring/screenshots/10.png)

Ya deberíamos de tener la instalación completada. Comprobamos la versión de la herramienta:

![...](Spring/screenshots/11.png)

### Spring Boot

Dentro de Spring, existe un subproyecto denominado Spring Boot que facilita la preparación de aplicaciones Spring para ponerlas en producción. Utilizaremos esta herramienta durante el despliegue.

Para instalarla hacemos uso de SDKMAN:

![...](Spring/screenshots/12.png)

Comprobamos la versión instalada:

![...](Spring/screenshots/13.png)

### Maven

Maven es una herramienta enfocada a la construcción de proyectos Java que permite la gestión de dependencias. Su instalación también es a través de SDKMAN:

![...](Spring/screenshots/14.png)

Comprobamos la versión instalada:


![...](Spring/screenshots/15.png)

Existen otras herramientas para construcción de proyectos Java. Aquí podemos citar Gradle.

## Aplicacion
### Creación del proyecto

Creamos la estructura base del proyecto utilizando Spring Boot con el siguiente comando:

![...](Spring/screenshots/16.png)

Listamos el contenido de la carpeta de trabajo:

![...](Spring/screenshots/17.png)

## Escritura de código

Tendremos que adaptar un poco la estructura inicial del proyecto para cumplir con el objetivo de la aplicación que tenemos que desarrollar.

Dentro de la carpeta src/main tendremos que organizar los distintos módulos (controlador, modelo y plantilla) que componen la aplicación de la siguiente manera:

![...](Spring/screenshots/18.png)

![...](Spring/screenshots/19.png)

### Controlador

![...](Spring/screenshots/20.png)

### Modelo

![...](Spring/screenshots/21.png)

### Repositorio

![...](Spring/screenshots/22.png)


### Plantilla

Para la plantilla vamos a utilizar Thymeleaf un motor de plantillas moderno para Java:

![...](Spring/screenshots/23.png)
![...](Spring/screenshots/24.png)
![...](Spring/screenshots/25.png)
![...](Spring/screenshots/26.png)

### Dependencias

Maven es un gestor de dependencias. Por tanto debemos definir estas dependencias en un fichero XML:

![...](Spring/screenshots/27.png)

Listado de dependencias 

spring-boot-starter-web 	Andamiaje de la aplicación web.
spring-boot-starter-test 	Andamiaje de tests para la aplicación web.
spring-boot-starter-thymeleaf 	Motor de plantillas.
spring-boot-starter-data-jpa 	Capa de persistencia Java.
postgresql 	Driver para conectar a bases de datos PostgreSQL (JDBC).
spring-boot-maven-plugin 	Plugin de Spring Boot para usar Maven.

### Credenciales
El fichero que contiene las credenciales se añadira al .gitignore
![...](Spring/screenshots/28.png)



## Proceso de construcción

Para poner en funcionamiento el proyecto necesitamos dos fases que se llevarán a cabo mediante Maven:

    Compilación.
    Empaquetado.

La herramienta que usamos para ello es Maven, pero en el propio andamiaje de la aplicación ya se incluye un Maven Wrapper denominado mvnw que incluye todo lo necesario para poder construir el proyecto.

Para llevar a cabo la compilación del proyecto ejecutamos lo siguiente:

Inicio
![...](Spring/screenshots/29.png)

Final
![...](Spring/screenshots/30.png)

Para llevar a cabo el empaquetado del proyecto ejecutamos lo siguiente:
Inicio
![...](Spring/screenshots/31.png)
Final
![...](Spring/screenshots/32.png)

Tras esto, obtendremos un archivo JAR (Java ARchive) en la ruta:

![...](Spring/screenshots/33.png)

El fichero generado tiene la versión 0.0.1-SNAPSHOT. Esto se puede cambiar modificando la etiqueta <version> del fichero pom.xml.

Una forma de lanzar la aplicación es correr el fichero JAR generado:

![...](Spring/screenshots/34.png)

Dentro del empaquetado también se incluye Tomcat un servidor de aplicaciones para Java que se puede usar perfectamente en producción.

Esto nos permitirá acceder a http://localhost:8080 y comprobar que la aplicación funciona correctamente.

Tener en cuenta que la carpeta target no debe estar dentro de control de versiones.

![...](Spring/screenshots/35.png)
![...](Spring/screenshots/36.png)
![...](Spring/screenshots/37.png)


## Entorno de producción

De cara a simplificar el proceso de despliegue en el entorno de producción, podemos disponer de un script que realice los pasos del proceso de construcción:

![...](Spring/screenshots/38.png)

Asignamos permisos de ejecución:

![...](Spring/screenshots/39.png)

A continuación creamos un fichero de servicio para gestionarlo mediante systemd:

![...](Spring/screenshots/40.png)

Añadimos este servicio para que esté disponible:

![...](Spring/screenshots/41.png)


Iniciamos el servicio y lo habilitamos para que se inicie en el arranque del sistema:


![...](Spring/screenshots/42.png)

Podemos comprobar el estado del servicio (tener en cuenta que puede tardar algún tiempo):

![...](Spring/screenshots/43.png)

### Configuración de Nginx

Lo último que nos queda es configurar el host virtual en Nginx para dar servicio a las peticiones:

![...](Spring/screenshots/44.png)

Recargamos la configuración del servidor web para que los cambios surtan efecto:

![...](Spring/screenshots/45.png)
![...](Spring/screenshots/46.png)


## Script de despliegue

Veamos un ejemplo de script de despliegue para esta aplicación:
![...](Spring/screenshots/49.png)

Damos permisos de ejecución:
![...](Spring/screenshots/50.png)

![...](Spring/screenshots/52.png)

![...](Spring/screenshots/51.png)


## Resultados
Antes de añadir certificado de seguridad:
![...](Spring/screenshots/47.png)

Despues de añadir el certificado de seguirdad:
![...](Spring/screenshots/48.png)

## Enlace aplicacion

https://spring.travelroad.alu7174.arkania.es/


## Conclusiones

La conclusion final de Spring es que es un framework de desarrollo Java completo y maduro que ofrece una gran cantidad de herramientas y características para ayudar a los desarrolladores a crear aplicaciones más eficientes, escalables y seguras. Con su amplia comunidad y su gran cantidad de paquetes y librerías disponibles, Spring es una excelente opción para cualquier proyecto de desarrollo Java.
