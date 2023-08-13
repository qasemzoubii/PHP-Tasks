<h1>Superglobals in PHP</h1>

    <h2>$_GET:</h2>
    <a href="?name=John">Click here with name=John</a>
    <?php
    // Accessing $_GET superglobal
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        echo "<p>Hello, $name! Welcome to the website!</p>";
    }
// We use $_GET
// to retrieve data from the URL's query parameters.
// When you click on the link "Click here with name=John," 
// it appends ?name=John to the URL,
// and PHP extracts the name value from the URL using $_GET['name'] and displays
// a personalized greeting.

    ?>

    <h2>$_POST:</h2>
    <form method="POST" action="calculator.php"
    <?php echo $_SERVER['PHP_SELF'];
    ?>">
        <label for="email">Your Email:</label>
        <input type="text" name="email" id="email">
        <input type="submit" value="Submit">
    </form>
    <?php
    // Accessing $_POST superglobal
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            echo "<p>Thank you for submitting your email: $email</p>";
        }
    }

//     $_POST:

// We create a simple HTML form with an email input field and submit button.
// When the form is submitted, PHP accesses the submitted data using $_POST['email'] 
// and displays a message thanking the user for submitting their email.

    ?>

    <h2>$_SESSION:</h2>
    <?php
    // Using $_SESSION super global
    session_start();

    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 1;
    } else {
        $_SESSION['counter']++;
    }

    echo "<p>You have visited this page " . $_SESSION['counter'] . " times.</p>";

//     $_SESSION:

// We start a session using session_start() and use $_SESSION
// to store and display the number of times the page has been visited.
// Each time the page is loaded, the session counter is incremented and displayed.

    ?>

    <h2>$_COOKIE:</h2>
    <?php
    // Using $_COOKIE superglobal
    $cookieName = "visited_count";

    if (!isset($_COOKIE[$cookieName])) {
        setcookie($cookieName, 1, time() + 3600, "/");
        echo "<p>This is your first visit to the website.</p>";
    } else {
        $count = $_COOKIE[$cookieName];
        $count++;
        setcookie($cookieName, $count, time() + 3600, "/");
        echo "<p>You have visited this website $count times.</p>";
    }

//     $_COOKIE:

// We use $_COOKIE to store and display the number of times the website has been visited.
// A cookie named "visited_count" is created with an expiration time of one hour.
// If the cookie doesn't exist (first visit), it is set with a count of 
// 1. On subsequent visits, the count is incremented and updated in the cookie.

    ?>

    <h2>$GLOBALS:</h2>
    <?php
    // Using $GLOBALS superglobal
    $number1 = 10;
    $number2 = 20;

    function addNumbers() {
        // Accessing global variables using $GLOBALS
        $sum = $GLOBALS['number1'] + $GLOBALS['number2'];
        return $sum;
    }

    $result = addNumbers();
    echo "<p>The sum of $number1 and $number2 is $result.</p>";

// $GLOBALS:

// We define two variables $number1 and $number2 outside the function addNumbers().
// Inside the function, we access these variables using the $GLOBALS array and calculate their sum.
// This demonstrates how to access global variables within the function scope using $GLOBALS.
// By running this PHP script, you can see the different superglobals in action
// and understand how they are used to handle data in different scenarios within a PHP application.


    ?>





