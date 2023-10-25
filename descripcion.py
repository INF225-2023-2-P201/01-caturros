from bdd.bdd import traduccion
import spacy

nlp = spacy.load("es_core_news_sm")

text = ("queiero A habilitar B")

#Revisa verbos de la frase
doc = nlp(text)
verbo = [token.lemma_ for token in doc if token.pos_ == "VERB"][0]

#consulta a la base de datos por el verbo
resultado = traduccion(verbo)
partes = resultado.split(";")

for parte in partes:
    print(parte)
