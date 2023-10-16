<!DOCTYPE html>
<html>

<body>
    <h2>Create</h2>
    @if(Session::has('success'))
        <p>{{ session::get('success') }}</p>
    @endif

    @if(Session::has('fail'))
        <p>{{ session::get('fail') }}</p>
    @endif

    <form action="{{ route('customers.insert') }}" method="POST">
        @csrf
        <label for="fname">Name:</label><br>
        <input type="text" name="name"><br>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="lname">Phone:</label><br>
        <input type="text" name="phone"><br><br>
        @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="submit" value="Submit">
    </form>
</body>
</html>
