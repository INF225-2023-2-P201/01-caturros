# 01-caturros


## Integrantes
Este es el repositorio de Caturros, cuyos integrantes son:
* Diego Moyano - 202004509-7
* Alvaro Soto - 202004608-5
* Dante Aspee - 202073524-7
* Gonzalo Caro - 202030553-6
* Vicente Neira - 202004663-8
* Vicente Ruiz - 202004642-5
* Ayudante: José Southerland


## Wiki
Se puede acceder a la wiki mediante el siguiente [enlace](https://github.com/INF225-2023-2-P201/01-caturros/wiki)


## Historias de usuarios 
A continuación está el enlace a las [historias de usuario del proyecto](https://github.com/INF225-2023-2-P201/01-caturros/issues)

## Videos
A continuación se encuentran los videos utilizados para evidenciar el avance en los sprints.
* [sprint 1](https://www.youtube.com/watch?v=nVbRdrlfwEM)
* [sprint 3](https://www.youtube.com/watch?v=Mr7GJP_TreA)
* [Demostración página web](https://www.youtube.com/watch?v=NXTS4NMlJdc&embeds_referring_euri=http%3A%2F%2Flocalhost%2F&source_ve_path=Mjg2NjY&feature=emb_logo)
* [Demo Final](https://youtu.be/-5z3rYe3vcA)

## Ejecución de código
Instalar esto antes de la ejecucion del archivo de python  
pip install mysql-connector   
pip install spacy
python3 -m spacy download es_core_news_sm  
pip install networkx  
pip install matplotlib  
En la primera línea del [descripcion.py](https://github.com/INF225-2023-2-P201/01-caturros/blob/main/descripcion.py) se tiene que poner la ubicación de su intérprete de Python y antes los caracteres #!.  
Si se está ejecutando en Windows asegurarse de tener en el PATH el archivo del interprete de Python, acá hay un [vídeo](https://www.youtube.com/watch?v=B08TNPt7a-M&ab_channel=Pilodev) que resuelve el tema.  
En la carpeta xampp\apache\conf\extra editar el archivo http-xampp.conf y introducir después de las líneas <Directory>, el siguiente extracto:  
``<Directory "C:/xampp/htdocs/01-caturros">``  
``    Options +ExecCGI``  
``    AddHandler cgi-script .py``  
``</Directory>``  
Al ingresar entradas en el index.php ir revisando la Consola de la página, si tira errores repetir el proceso anterior pero en la carpeta xampp\apache\conf y en el archivo httpd.conf.  
Si sigue obteniendo errores, ir revisando en la carpeta xampp\apache\logs el archivo error.log los errores que aparezcan, si lo anterior está bien solo deberían aparecer problemas de instalar librerías.

## Instrucciones Página Web
Nuestra página fue creada usando la aplicación Xampp, por lo tanto, para visualizarla se deberán mover todos los archivos del directorio github/01-Caturros a C:\xampp\htdocs.

Luego de esto, hay que activar Apache y MySQL en Xampp.

Con esto abierto, hay que subir las bases de datos al localhost/phpmyadmin, para esto, se debe crear una base de datos llamada caturros y hay que importar servicios, registro, administradores e intenciones

Ahora, en el navegador se debe buscar localhost/nombrecarpetanueva/index.php para poder acceder a la página. En ella encontrarás un espacio para iniciar sesión ingresando nombre de usuario(En este caso se utilizaron los nombrese: Vicentes, Alvaro, Dante, Gonzalo y Diego) y contraseña(hola123), para poder ingresar a la página, en esta se encontrarán dos pestañas, CATURROS y REGISTRO, en la primera y principal se podrán ingresar las intenciones de los usuarios de la capa empresarial y en la última se encontrará un registro de las intenciones ingresadas.

Además se desarrollaron dos bases de datos nuevas, la de REGISTROS, que guardará las intenciones ingresadas en conjunto con su descomposición y ADMINISTRADORES, que guardará la información de inicio de sesión de cada administrador.
