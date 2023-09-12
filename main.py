import nltk

intencion = nltk.word_tokenize("El nodo A quiere conectarse con el nodo B")

descripcion = nltk.pos_tag(intencion)

instrucciones = {}

for palabra, tag in descripcion:
    if tag.startswith('VB'):  # Verbo
        if "Accion" in instrucciones:
            instrucciones["Accion"].append(palabra)
        else:
            instrucciones["Accion"] = [palabra]

    elif tag.startswith('NN'):  # Sustantivo
        if "Objeto" in instrucciones:
            instrucciones["Objeto"].append(palabra)
        else:
            instrucciones["Objeto"] = [palabra]

    elif tag.startswith('JJ'):  # Adjetivo
        if "Adjetivo" in instrucciones:
            instrucciones["Adjetivo"].append(palabra)
        else:
            instrucciones["Adjetivo"] = [palabra]

print(descripcion)
print(instrucciones)
