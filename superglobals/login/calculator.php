<h1>Calculator</h1>
<?php 

session_start();
echo "<h2> Hello ".$_SESSION["username"]."</h2>" 

?>

    <form method="POST" action="calculator.php">
        <label for="num1">Enter first number:</label>
        <input type="number" name="num1" id="num1" required>
        <br><br>
        <label for="num2">Enter second number:</label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        <label for="operator">Select an operator:</label>
        <button type="submit" name="operator" value="add">( + )</button>
        <button type="submit" name="operator" value="subtract">( - )</button>   
        <button type="submit" name="operator" value="multiply">( * )</button>
        <button type="submit" name="operator" value="divide">( / )</button>
    </form>

    <?php
    // Check if the calculator form is submitted using POST method
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Accessing the POST data from the form
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        // Perform the calculation based on the selected operator
        if ($operator === 'add') {
            $result = $num1 + $num2;
        } elseif ($operator === 'subtract') {
            $result = $num1 - $num2;
        } elseif ($operator === 'multiply') {
            $result = $num1 * $num2;
        } elseif ($operator === 'divide') {
            // Check for division by zero
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero!";
            }
        } else {
            $result = "Invalid operator selection!";
        }

        // Display the result
        echo "<h2>Result: $result</h2>";
    }
    ?>