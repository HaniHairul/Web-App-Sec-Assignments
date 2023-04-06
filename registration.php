<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body>
<main>
    <form action = "connection.php" method="post">
        <h1>Register</h1>
        <div>
            <label for="username">Matric No</label>
            <input type="text" name="matricno" id="matricno" title="No alphabet and any special characters" pattern="^[0-9]{7}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <!-- <div>
            <label for="password2">Password Again:</label>
            <input type="password" name="password2" id="password2">
        </div> -->
        <!-- <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div> -->
        <button type="submit">Register</button>
        <footer>Already register? <a href="login.html">Login here</a></footer>
    </form>
</main>
</body>
</html>