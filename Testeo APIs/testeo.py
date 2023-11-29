from bdd import traduccion, insertar
import spacy

nlp = spacy.load("es_core_news_sm")

with open('intenciones.txt', 'r') as archivo:
    for linea in archivo:
        print("La intencion es: ", linea)
        doc = nlp(linea)
        verbo = [token.lemma_ for token in doc if token.pos_ == "VERB"][0]
        pronombres = [token.lemma_ for token in doc if token.pos_ == "PROPN"]
        resultado = traduccion(verbo)
        print("los pronombres de la intencion son: ", pronombres)
        print("El verbo de la intencion es: ", verbo)
        print("La traduccion es: ", resultado)

        print("Se inserto en la base de datos la intencion: ", linea)
        insertar(verbo, linea, resultado)
        print("----------------------------------------------------")