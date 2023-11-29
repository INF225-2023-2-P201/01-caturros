#!C:\Users\Vicen\AppData\Local\Programs\Python\Python311

import cgi
from bdd.bdd import traduccion, insertar
from red import grafo
import spacy
import json

nlp = spacy.load("es_core_news_sm")

params = cgi.FieldStorage()
text = params.getvalue('text')

#text = "prender PC1"

#Revisa verbos de la frase
doc = nlp(text)
verbo = [token.lemma_ for token in doc if token.pos_ == "VERB"][0]
pronombres = [token.lemma_ for token in doc if token.pos_ == "PROPN"]

#consulta a la base de datos por el verbo
resultado = traduccion(verbo)
insertar(verbo, text, resultado)

aux = grafo(resultado, pronombres)
print("Content-Type: application/json") 
print("Access-Control-Allow-Origin: *")
print()
print(json.dumps({"Resultado": aux}))
