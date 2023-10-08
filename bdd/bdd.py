import mysql.connector

conexion1=mysql.connector.connect(host="localhost", user="root", passwd="", database="caturros")
cursor1=conexion1.cursor()
cursor1.execute("select id, intencion from intenciones")
for fila in cursor1:
    print(fila)

query = ("SELECT id,intencion FROM intenciones "
         "WHERE id = %s")

valor_id = 35 
cursor1.execute(query, (valor_id,))
resultado = cursor1.fetchone()
print("Esta es tu busqueda:" + str(resultado))
cursor1.close()
conexion1.close()
    