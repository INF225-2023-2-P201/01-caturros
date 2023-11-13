import networkx as nx
import matplotlib.pyplot as plt

def create_network():
    G = nx.Graph()

    devices = ["PC1", "PC2", "PC3", "Router", "Firewall"]
    G.add_nodes_from(devices)

    # Conectar dispositivos
    G.add_edges_from([("PC1", "Router"), ("PC2", "Router"), ("PC3", "Router"), ("Router", "Firewall")])

    # Se asocia el atributo service a cada dispositivo para ver disponibilidad
    nx.set_node_attributes(G, {device: False for device in devices}, "service")

    return G

def visualize_network(graph):
    pos = nx.spring_layout(graph)
    nx.draw(graph, pos, with_labels=True, font_weight='bold', node_size=700, node_color="skyblue")
    plt.savefig("network_graph.png")

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

def main():
    # Crear la red
    network = create_network()

    # Visualizar la red (opcional)
    visualize_network(network)

    # Hacer ping entre dispositivos específicos
    ping_device(network, "PC1", "Router")
    ping_device(network, "PC2", "Firewall")

    # Activar y desactivar servicios
    activate_service(network, "PC1")
    ping_device(network, "PC1", "Router")
    desactivate_service(network, "PC1")
    ping_device(network, "PC1", "Router")

if __name__ == "__main__":
    main()
