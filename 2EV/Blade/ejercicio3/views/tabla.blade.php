<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f3f6f9;
        padding: 30px;
    }

    h1 {
        text-align: center;
        color: #163A5F;
        margin-bottom: 25px;
    }

    table {
        width: 85%;
        margin: 0 auto;
        border-collapse: collapse;
        background-color: white;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
    }

    th {
        background-color: #8d0733;
        color: white;
        padding: 15px;
        text-align: left;
    }

    td {
        padding: 13px 15px;
        border-bottom: 1px solid #ddd;
        color: #c05671;
    }

    tr:nth-child(even) {
        background-color: #f7eaf2;
    }

    tr:hover {
        background-color: #dd9ab4;
    }

    tr:last-child td {
        border-bottom: none;
    }
</style>

<table>
    <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Tipo</th>
        <th>Precio</th>
    </tr>
    @foreach($zapatillas as $zapatilla)
    <tr>
        <td>{{ $zapatilla->getMarca() }}</td>
        <td>{{ $zapatilla->getModelo() }}</td>
        <td>{{ $zapatilla->getTipo() }}</td>
        <td>{{ $zapatilla->getPrecio() }}</td>
    </tr>
    @endforeach
</table>
