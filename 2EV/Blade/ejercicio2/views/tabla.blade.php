
<table>
    <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Tipo</th>
        <th>Precio</th>
    </tr>
    <tr>
        <td>{{ $zapatilla->getMarca() }}</td>
        <td>{{ $zapatilla->getModelo() }}</td>
        <td>{{ $zapatilla->getTipo() }}</td>
        <td>{{ $zapatilla->getPrecio() }}</td>
    </tr>
</table>
