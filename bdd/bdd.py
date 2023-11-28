import mysql.connector

def traduccion(verbo):
    conexion1=mysql.connector.connect(host="localhost", user="root", passwd="", database="caturros")
    cursor1=conexion1.cursor()
    cursor1.execute("SELECT cisco FROM intenciones WHERE intencion = "+"'"+verbo+"'")
    
    resultado = cursor1.fetchone()[0]
    cursor1.close()
    conexion1.close()
    return resultado

def insertar(verbo, intencion, traduccion):
    conexion=mysql.connector.connect(host="localhost", user="root", passwd="", database="caturros")
    cursor = conexion.cursor()
    consulta = "INSERT INTO registro (frase, intencion, traduccion) VALUES (%s, %s, %s)"
    valores = (verbo, intencion, traduccion)
    cursor.execute(consulta, valores)
    conexion.commit()
    cursor.close()
    conexion.close()

