import spacy

nlp = spacy.load("en_core_web_sm")
intenciones_validas = ["saludar", "preguntar", "hacer", "jugar", "comer", "salir", "beber", "tomar", "cocinar", "limpiar", "asear", "lavar", "programar", "trabajar", "ser", "padelear", "solidificar", "solidificarme", "endurecer", "endurecerme"]

def validar_intencion(texto):
    # Procesar el texto con spaCy
    doc = nlp(texto)

    # Verificar si el texto comienza con "Quiero"
    if texto.lower().startswith("quiero"):
        # Extraer la intención completa después de "Quiero"
        verbo = None
        for token in doc:
            if token.text.lower() != "quiero":
                verbo = token.lemma_
                break
        intencion = texto[len("quiero"):].strip().lower()

        # Verificar si la intención no está vacía
        if verbo in intenciones_validas:
            return f"La intención 'Quiero {intencion}' es coherente."
        else:
            return "No se pudo determinar la intención del usuario."
    elif texto.lower().startswith("necesito"):
        # Extraer la intención completa después de "Quiero"
        verbo = None
        for token in doc:
            if token.text.lower() != "necesito":
                verbo = token.lemma_
                break
        intencion = texto[len("necesito"):].strip().lower()

        # Verificar si la intención no está vacía
        if verbo in intenciones_validas:
            return f"La intención 'Necesito {intencion}' es coherente."
        else:
            return "No se pudo determinar la intención del usuario."
    else:
        return "La intención debe comenzar con 'Quiero' o 'Necesito'."

if __name__ == "__main__":
    texto_usuario = input("Ingrese su mensaje: ")
    resultado = validar_intencion(texto_usuario)
    print(resultado)
