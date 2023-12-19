<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>week7</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>This Home Page From home2.php</h1>
    <br>
    <h3>Test of view</h3>
    <br>
    <table>
        <tr>
            <th>Product ID. </th>
            <th>Product Name. </th>
            <th>Price. </th>
            <th>Qty.</th>
        </tr>
        <tr>
            <td>{{ $valueds['id'] }}</td>
            <td>{{ $valueds['product'] }}</td>
            <td>{{ $valueds['price'] }}</td>
            <td>{{ $valueds['qty'] }}</td>
        </tr>
    </table>
</body>

</html>
