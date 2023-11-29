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

## Ejecución de código
Instalar esto antes de la ejecucion del archivo de python  
pip install mysql-connector  
python3 bdd/bdd.py  
pip install spacy
python3 -m spacy download es_core_news_sm  
pip install networkx  
pip install matplotlib  
Para la base de datos, se debe configurar en local con Xampp.

## Instrucciones Cisco Packet Tracer
Previamente a los siguientes pasos los pings no estarán habilitados

### Habilitar enrutamiento en Firewall mediante siguientes comandos

Estos comandos deben ser ejecutados desde la CLI del Firewall con nombre ASA0

enable

cisco123! //esta es la password

configure terminal 

no policy-map global_policy

policy-map global_policy

class inspection_default 

inspect icmp

exit

no service-policy global_policy global

service-policy global_policy global

De esta forma podremos realizar ping desde los PCs de la red inside a la red outside 

### Enrutamiento entre nodos

Estos comandos deben ser ejecutados en el router que deseamos configurar

enable

configure terminal

interface fa0/0 *(se indica el puerto a configurar, fa si es fastethernet, gigabit si es gigabitethernet y indicamos el numero del puerto, puede ser 0/0 1/0 0/1, depende del puerto conectado)*

ip address 192.168.10.1 255.255.255.0 

*(Los parametros a ingresar son la ip que asignaremos.* 

*Y posteriormente su máscara de red. En este caso creamos 3 redes diferentes ya que teniamos 3 zonas estas se diferenciaban mediante el tercer octeto. Ejemplo: 10,20,30.*

*El cuarto octeto identifica cada objeto de red.* 

*El 1 siempre es utilizado para la puerta de enlace o el puertodesde donde nace la red. La máscara de red debe ser acorde a la ip que estemos asignando)*

no shutdown *(activamos la interfaz configurada)*

exit 

end

write *(con este comando guardamos los cambios realizados)*

De esta forma se configura el enrutamiento y la conexión desde el router

Posteriormente se debe asignar la ip a cada pc que tengamos 

Ingresando a Desktop y IP Configuration mediante su interfaz

Ingresamos IPv4 Address

En este caso como la red fue 192.168.10.1, este objeto de red tendrá ip 192.168.10.2 con máscara 255.255.255.0

Y finalmente asignamos el Default Gateway o Puerta de Enlace como 192.168.10.1

Esto aplicado a los diferentes objetos de red y siendo rigurosos asignando el último octeto dependiendo del objeto de red. Se genera el enrutamiento para esta red. 

## Instrucciones Página Web
Nuestra página fue creada usando la aplicación Xampp, por lo tanto, para visualizarla se deberán mover todos los archivos del directorio github/01-Caturros a C:\xampp\htdocs.

Luego de esto, hay que activar Apache y MySQL en Xampp.

Ahora, en el navegador se debe buscar localhost/nombrecarpetanueva/index.php para poder acceder a la página. En ella encontrarás un espacio para iniciar sesión ingresando nombre de usuario(En este caso se utilizaron los nombrese: Vicentes, Alvaro, Dante, Gonzalo y Diego) y contraseña(hola123), para poder ingresar a la página, en esta se encontrarán dos pestañas, CATURROS y REGISTRO, en la primera y principal se podrán ingresar las intenciones de los usuarios de la capa empresarial y en la última se encontrará un registro de las intenciones ingresadas.


