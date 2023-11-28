#!/usr/bin/env python3
import json
import cgi
from bdd.bdd import traduccion
import spacy

nlp = spacy.load("es_core_news_sm")

params = cgi.FieldStorage()
text = params.getvalue('text')

#Revisa verbos de la frase
doc = nlp(text)
verbo = [token.lemma_ for token in doc if token.pos_ == "VERB"][0]

#consulta a la base de datos por el verbo
resultado = traduccion(verbo)
partes = resultado.split(";")

response_data = {"verbo": verbo, "partes": partes}

# Imprime el resultado como JSON
print("Content-Type: application/json") 
print("Access-Control-Allow-Origin: *")
print()
print(json.dumps(response_data))