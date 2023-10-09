<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h2>List customer</h2>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Phone</th>
        </tr>
        @foreach($customers as $customer)
        @if($customer->id > 3)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->phone }}</td>
        </tr>
        @endif
        @endforeach
    </table>
</body>

</html>