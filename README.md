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

## Ejecución de código
Instalar esto antes de la ejecucion del archivo de python  
pip install mysql-connector  
python3 bdd/bdd.py  
pip install spacy
python3 -m spacy download es_core_news_sm
Para la base de datos, se debe configurar en local con Xampp.

## Instrucciones Cisco Packet Tracer
Previamente a los siguientes pasos los pings no estarán habilitados
Habilitar enrutamiento en Firewall mediante siguientes comandos
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
