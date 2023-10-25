import mysql.connector

def traduccion(verbo):
    conexion1=mysql.connector.connect(host="localhost", user="root", passwd="", database="caturros")
    cursor1=conexion1.cursor()
    cursor1.execute("SELECT cisco FROM intenciones WHERE intencion = "+"'"+verbo+"'")
    
    resultado = cursor1.fetchone()[0]
    cursor1.close()
    conexion1.close()
    return resultado
