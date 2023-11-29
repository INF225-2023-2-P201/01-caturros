import networkx as nx
import mysql.connector
#import matplotlib.pyplot as plt
#import io

def create_network():
    G = nx.Graph()

    devices = ["PC1", "PC2", "Router", "Firewall"]
    G.add_nodes_from(devices)

    # Conectar dispositivos
    G.add_edges_from([("PC1", "Router"), ("PC2", "Router"), ("Router", "Firewall")])

    # Se asocia el atributo service a cada dispositivo para ver disponibilidad
    nx.set_node_attributes(G, {device: False for device in devices}, "service")

    return G

#def visualize_network(graph):
#    pos = nx.spring_layout(graph)
#    nx.draw(graph, pos, with_labels=True, font_weight='bold', node_size=700, node_color="skyblue")
#    plt.savefig("network_graph.png")
    
    #image_buffer = io.BytesIO()
    #plt.savefig(image_buffer, format="png")
    #image_binary = image_buffer.getvalue()
    #conexion=mysql.connector.connect(host="localhost", user="root", passwd="", database="caturros")
    #cursor = conexion.cursor()
    #consulta = "INSERT INTO fotos (imagen) VALUES (%s)"
    #datos = (image_binary)
    #cursor.execute(consulta, datos)
    #conexion.commit()
    #cursor.close()
    #conexion.close()

def ping_device(graph, source_device, target_device):
    if source_device in graph.nodes and target_device in graph.nodes:
        if "service" in graph.nodes[source_device] and graph.nodes[source_device]["service"]:
            if nx.has_path(graph, source_device, target_device):
                return f"Haciendo ping desde {source_device} hacia {target_device}: Respuesta recibida."
                
            else:
                return f"{target_device} no es vecino de {source_device}. No se puede hacer ping."
        else:
            return f"{source_device} no tiene un servicio activo. No se puede hacer ping."
    else:
        return f"Uno o ambos dispositivos no son válidos en la red."

def activate_service(graph, device, conexion, cursor):
    if device in graph.nodes:
        graph.nodes[device]["service"] = True
        consulta_update = "UPDATE servicios SET estado = %s WHERE nodo = %s"
        cursor.execute(consulta_update, (True, device))
        conexion.commit()
        return f"Servicio activado en {device}."
    else:
        return f"{device} no es un dispositivo válido en la red."

def desactivate_service(graph, device, conexion, cursor):
    if device in graph.nodes:
        graph.nodes[device]["service"] = False
        consulta_update = "UPDATE servicios SET estado = %s WHERE nodo = %s"
        cursor.execute(consulta_update, (False, device))
        conexion.commit()
        return f"Servicio desactivado en {device}." 
    else:
        return f"{device} no es un dispositivo válido en la red." 

def route_nodes(graph, node1, node2):
    if node1 in graph.nodes and node2 in graph.nodes:
        if not graph.has_edge(node1, node2):
            graph.add_edges_from([(node1, node2)])
            return f"Conexión creada entre {node1} y {node2}." 
        else:
            return f"Ya existe una conexión entre {node1} y {node2}." 
    else:
        return f"Uno o ambos nodos no son válidos en el grafo." 

def remove_nodes(graph, node1, node2):
    if node1 in graph.nodes and node2 in graph.nodes:
        if graph.has_edge(node1, node2):
            graph.remove_edge(node1, node2)
            return f"Conexión entre {node1} y {node2} eliminada." 
        else:
            return f"No existe una conexión entre {node1} y {node2}." 
    else:
        return f"Uno o ambos nodos no son válidos en el grafo." 

def grafo(text, pronombres):
    # Crear la red
    network = create_network()
    conexion=mysql.connector.connect(host="localhost", user="root", passwd="", database="caturros")
    cursor = conexion.cursor()
    consulta = "SELECT * FROM servicios"
    cursor.execute(consulta)
    busqueda = cursor.fetchall()
    
    for _,nodo, estado in busqueda:
        if nodo in network.nodes:
            network.nodes[nodo]["service"] = estado

    resultado = "No se pudo hacer porque no existen algunas de esas palabras en la Base de Datos."
    if text == "ping":
        resultado = ping_device(network, pronombres[0], pronombres[1])

    elif text == "activar":
        resultado = activate_service(network, pronombres[0], conexion, cursor)

    elif text == "desactivar":
        resultado = desactivate_service(network, pronombres[0], conexion, cursor)

    elif text == "enrutar":
        resultado = route_nodes(network, "PC1", "PC2")

    elif text == "desenrutar":
        resultado = remove_nodes(network, "PC2", "Router")

    cursor.close()
    conexion.close()

    return resultado

    #visualize_network(network)

