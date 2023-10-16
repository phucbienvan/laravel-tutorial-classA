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
    @if(Session::has('success'))
        <p>{{ session::get('success') }}</p>
    @endif

    @if(Session::has('fail'))
        <p>{{ session::get('fail') }}</p>
    @endif
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        @foreach($customers as $customer)
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
                    <a href="{{ route('customers.delete', $customer->id) }}">
                        Delete
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>