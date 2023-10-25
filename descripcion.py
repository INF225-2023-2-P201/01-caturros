from bdd.bdd import traduccion
import spacy

nlp = spacy.load("es_core_news_sm")

text = ("A habilitar B")

doc = nlp(text)
verbo = [token.lemma_ for token in doc if token.pos_ == "VERB"][0]

resultado = traduccion(verbo)
partes = resultado.split(";")

for parte in partes:
    print(parte)
