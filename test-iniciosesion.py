import mysql.connector
conexion1 = mysql.connector.connect(host="localhost", user="root", passwd="", database="caturros")

with open('usuarios.txt', 'r') as archivo:
    for linea in archivo:
        nombre,clave = linea.split(",")
        cursor1=conexion1.cursor()
        cursor1.execute("SELECT clave FROM administradores WHERE usuario = "+"'"+nombre+"'")
        resultado = cursor1.fetchone()
        clave = clave.replace('\n', '')
        if resultado:
            print(resultado[0] )
            if resultado[0] == clave:
                print("El usuario " + nombre + " existe y la clave es correcta")
            else:
                print("El usuario existe, pero la clave es incorrecta")
        else:
            print("El usuario "+ nombre + " no existe")
        print("----------------------------------------------------")
        
        cursor1.close()

conexion1.close()