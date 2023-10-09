<!DOCTYPE html>
<html>

<body>
    <h2>Create</h2>

    <form action="/customers" method="POST">
        @csrf
        <label for="fname">Name:</label><br>
        <input type="text" name="name"><br>
        <label for="lname">Phone:</label><br>
        <input type="text" name="phone"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
