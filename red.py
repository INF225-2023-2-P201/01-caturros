import networkx as nx
import matplotlib.pyplot as plt
import mysql.connector
import io

def create_network():
    G = nx.Graph()

    devices = ["PC1", "PC2", "Router", "Firewall"]
    G.add_nodes_from(devices)

    # Conectar dispositivos
    G.add_edges_from([("PC1", "Router"), ("PC2", "Router"), ("Router", "Firewall")])

    # Se asocia el atributo service a cada dispositivo para ver disponibilidad
    nx.set_node_attributes(G, {device: False for device in devices}, "service")

    return G

def visualize_network(graph):
    pos = nx.spring_layout(graph)
    nx.draw(graph, pos, with_labels=True, font_weight='bold', node_size=700, node_color="skyblue")
    image_buffer = io.BytesIO()
    plt.savefig(image_buffer, format="png")
    image_binary = image_buffer.getvalue()
    
    conexion=mysql.connector.connect(host="localhost", user="root", passwd="", database="caturros")
    cursor = conexion.cursor()
    consulta = "INSERT INTO fotos (imagen) VALUES (%s)"
    datos = (image_binary)
    cursor.execute(consulta, datos)

    conexion.commit()
    cursor.close()
    conexion.close()

def ping_device(graph, source_device, target_device):
    if source_device in graph.nodes and target_device in graph.nodes:
        if "service" in graph.nodes[source_device] and graph.nodes[source_device]["service"]:
            if target_device in graph.neighbors(source_device):
                print(f"Haciendo ping desde {source_device} hacia {target_device}: Respuesta recibida.")
            else:
                print(f"{target_device} no es vecino de {source_device}. No se puede hacer ping.")
        else:
            print(f"{source_device} no tiene un servicio activo. No se puede hacer ping.")
    else:
        print(f"Uno o ambos dispositivos no son válidos en la red.")

def activate_service(graph, device):
    if device in graph.nodes:
        graph.nodes[device]["service"] = True
        print(f"Servicio activado en {device}.")
    else:
        print(f"{device} no es un dispositivo válido en la red.")

def desactivate_service(graph, device):
    if device in graph.nodes:
        graph.nodes[device]["service"] = False
        print(f"Servicio desactivado en {device}.")
    else:
        print(f"{device} no es un dispositivo válido en la red.")

def route_nodes(graph, node1, node2):
    if node1 in graph.nodes and node2 in graph.nodes:
        if not graph.has_edge(node1, node2):
            graph.add_edges_from([(node1, node2)])
            print(f"Conexión creada entre {node1} y {node2}.")
        else:
            print(f"Ya existe una conexión entre {node1} y {node2}.")
    else:
        print(f"Uno o ambos nodos no son válidos en el grafo.")

def remove_nodes(graph, node1, node2):
    if node1 in graph.nodes and node2 in graph.nodes:
        if graph.has_edge(node1, node2):
            graph.remove_edge(node1, node2)
            print(f"Conexión entre {node1} y {node2} eliminada.")
        else:
            print(f"No existe una conexión entre {node1} y {node2}.")
    else:
        print(f"Uno o ambos nodos no son válidos en el grafo.")

def main(text):
    # Crear la red
    network = create_network()

    if text == "ping":
        ping_device(network, "PC1", "Router")
        ping_device(network, "PC2", "Firewall")

    # Activar y desactivar servicios
    activate_service(network, "PC1")
    ping_device(network, "PC1", "Router")
    desactivate_service(network, "PC1")
    ping_device(network, "PC1", "Router")

    route_nodes(network, "PC1", "PC2")
    
    remove_nodes(network, "PC2", "Router")

    visualize_network(network)

if __name__ == "__main__":
    main()
