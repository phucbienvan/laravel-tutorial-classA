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
    <a href="/customers/create">Create customer</a>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        @foreach($customers as $customer)
        @if($customer->id > 3)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>
                <a href="{{ route('customers.show', $customer->id) }}">
                    {{ $customer->name }}
                </a>
            </td>
            <td>{{ $customer->phone }}</td>
            <td>
                <a href="{{ route('customers.edit', $customer->id) }}">
                    Edit
                </a>
            </td>
            <td>
                <a class="btn btn-danger" onclick="return confirm('Ban co muon xoa customer khong?')" href="{{ route('customers.delete', $customer->id) }}">Delete</a>
            </td>
        </tr>
        @endif
        @endforeach
    </table>
</body>

</html>