<!DOCTYPE html>
<html>

<body>
    <h2>Login</h2>
    @if(Session::has('success'))
        <p>{{ session::get('success') }}</p>
    @endif

    @if(Session::has('fail'))
        <p>{{ session::get('fail') }}</p>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="fname">Email:</label><br>
        <input type="text" name="email"><br>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="lname">Password:</label><br>
        <input type="text" name="password"><br><br>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="fname">Phone:</label><br>
        <input type="text" name="phone"><br>
        @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="lname">Name:</label><br>
        <input type="text" name="name"><br><br>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="submit" value="Submit">
    </form>
</body>
</html>
