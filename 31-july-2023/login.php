<h1>Login Page</h1>

    <form method="POST" action="calculator.php"<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" value="Login">
    </form>

    <?php
    // Check if the form is submitted using POST method
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Accessing the POST data from the form
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // You can add your login validation logic here.
        // For simplicity, we are not doing any validation in this example.

        // Display a welcome message after successful login
        echo "<p>Welcome, $username! You are logged in.</p>";
    }
    ?>