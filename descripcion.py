#!C:\Users\Vicen\AppData\Local\Programs\Python\Python311

import json
import cgi
from bdd.bdd import traduccion, insertar
import spacy
#import red

nlp = spacy.load("es_core_news_sm")

params = cgi.FieldStorage()
text = params.getvalue('text')


print("Content-Type: application/json") 
print("Access-Control-Allow-Origin: *")
print()
print(json.dumps({"TextoRecibidoEnPython": text}))

#Revisa verbos de la frase
doc = nlp(text)
verbo = [token.lemma_ for token in doc if token.pos_ == "VERB"][0]

#consulta a la base de datos por el verbo
resultado = traduccion(verbo)

insertar(verbo, text, resultado)

#red.main(resultado)