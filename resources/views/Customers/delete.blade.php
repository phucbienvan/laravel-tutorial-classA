<!DOCTYPE html>
<html>

<body>
    <h2>Detele</h2>
    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" onsubmit="return confirmDelete();">
        @csrf
        <label for="fname">Name: {{ $customer->name }}</label><br>
        <label for="lname">Phone: {{ $customer->phone }}</label><br>
        <input type="submit" value="Submit">
    </form>
    <script>
        function confirmDelete() {
            var result = confirm("Wanna delete customers?");
            return result;
        }
    </script>
    
</body>
</html>
