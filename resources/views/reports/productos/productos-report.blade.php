<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Productos</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" media="screen">
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 1cm 1cm 1cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            text-align: center;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #e2cc06;
            color: black;
            text-align: center;
            line-height: 35px;
        }

        p {
            text-align: left;
        }

        h4 {
            text-align: center;
            font-size: 20px;
            font-weight: bolder;
        }

        h4 div {
            text-decoration: underline;
        }

        h1 {
            text-align: center;
            text-decoration: underline;
            font-size: 22px;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #ddd;
        }

        span {
            font-weight: bold;
        }

        img {
            margin: auto;
            display: block;
            width: 7rem;
            height: 7rem;
            position: absolute;
            padding-left: 35rem;
        }

        table {
            border-top-width: 0px;
            border-bottom-width: 1px;
            border-color: rgb(17 24 39);
        }
    </style>
    <style>
        .datagrid table {
            border-collapse: collapse;
            text-align: center;
            width: 100%;
        }

        .datagrid {
            font: normal 12px/150% Arial, Helvetica, sans-serif;
            background: #fff;
            overflow: hidden;
        }

        .datagrid table td,
        .datagrid table th {
            padding:
                20px 0px;
        }

        .datagrid table thead {
            border-bottom: solid 5px #0F362D;
        }

        .datagrid table thead th {
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#36752D',
                endColorstr='#1F4E78');
            background-color: #1F4E78;
            color: #000000;
            font-size: 13px;
            font-weight: bold;
            border-left: 0px solid #1F4E78;
            text-align: left;
        }

        .datagrid table thead tr th {
            color: white;
            text-align: center;
        }

        .datagrid table thead th:first-child {
            border: none;
        }

        .datagrid table tbody td {
            color: #000000;
            font-size: 13px;
            font-weight: normal;
            border-right: solid 1px #D3D3D3;
            border-left: solid 1px #D3D3D3;
        }

        .datagrid table tbody .alt td {
            background: #DFFFDE;
            color: #1F4E78;
        }

        .datagrid table tbody td:first-child {
            border-left: none;
        }

        .datagrid table tbody tr:last-child td {
            border-bottom:
                none;
        }

        .datagrid table tfoot td div {
            border-top: 1px solid #000000;
            background: #DFFFDE;
        }

        .datagrid table tfoot td {
            padding: 0;
            font-size: 12px
        }

        .datagrid table tfoot td div {
            padding: 2px;
        }

        .datagrid table tfoot td ul {
            margin: 0;
            padding: 0;
            list-style: none;
            text-align: right;
        }

        .datagrid table tfoot li {
            display: inline;
        }

        .datagrid table tfoot li a {
            text-decoration: none;
            display: inline-block;
            padding: 2px 8px;
            margin: 1px;
            color: #FFFFFF;
            border: 1px solid #1F4E78;
            /* Change the border color to blue */
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #1F4E78), color-stop(1, #163755));
            /* Change the gradient colors to blue */
            background: -moz-linear-gradient(center top, #1F4E78 5%, #163755 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1F4E78', endColorstr='#163755', GradientType=0);
            /* Keep the filter for IE */
        }
    </style>

</head>

<body>

    <main>
        <h1>ElectroTech</h1>
        <img class="logo"
            src="https://electtrotech.com/cdn/shop/files/logo-no-background.png?height=628&pad_color=ffffff&v=1693521614&width=1200"
            alt="">

        <p>
            {{-- <span>Usuario:</span> {{ auth()->user()->name }}. <br> --}}
            <span>Fecha:</span> {{ now()->format('Y-m-d') }}.
            <br><span>Hora:</span> {{ now()->format('H:i') }}.
        </p>

        <h4>
            <div> LISTA DE PRODUCTOS DEL INVENTARIO: </div>
        </h4>

        <div class="datagrid">
            <table>
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio de Venta</th>
                        <th>Stock</th>
                        <th>Código de Barra</th>
                        <th>Fecha Vencimiento</th>
                        <th>Existencia Mínima</th>
                        <th>Adicional</th>
                        <th>Categoría</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>
                                {{ $product->nombre_producto }}</td>
                            <td>{{ $product->descripcion }}
                            </td>
                            <td>{{ $product->precio_venta }}</td>
                            <td>{{ $product->cantidad_stock }}</td>
                            <td>{{ $product->cod_barra }}</td>

                            <td style="white-space:nowrap;">{{ $product->fecha_vencimiento }}</td>
                            <td>{{ $product->existencia_minimo }}</td>
                            <td>{{ $product->adicional }}</td>
                            <td>{{ $product->categorium->nombre }}
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
