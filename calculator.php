<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <form class="mainform" method="get">
            <h2>Calculator</h2>
            <label for="Number1">Enter Number1</label>
            <input type="text" name="Number1">
            <label for="Number2">Enter Number2</label>
            <input type="text" name="Number2">
            <select name="operator">
                <option value="addition">Addition</option>
                <option value="subtraction">Subtraction</option>
                <option value="multiplication">Multiplication</option>
                <option value="division">Division</option>
                <option value="modulus">Modulus</option>
                <option value="exponential">Exponential</option>
                <option value="none">None</option>
            </select>
            <div class="click">
                <button type="submit" name="submit" value="submit">Click Here</button>
            </div>
            <h2>The Result Is:
                <?php
                if (isset($_GET['submit'])) {
                    $result1 = $_GET['Number1'];
                    $result2 = $_GET['Number2'];
                    $operator = $_GET['operator'];

                    if (is_numeric($result1) && is_numeric($result2)) {
                        switch ($operator) {
                            case "none":
                                echo "You need to select a method!";
                                break;
                            case "addition":
                                echo $result1 + $result2;
                                break;
                            case "subtraction":
                                echo $result1 - $result2;
                                break;
                            case "multiplication":
                                echo $result1 * $result2;
                                break;
                            case "division":
                                if ($result2 == 0) {
                                    echo "Cannot divide by zero!";
                                } else {
                                    echo $result1 / $result2;
                                }
                                break;
                            case "modulus":
                                echo $result1 % $result2;
                                break;
                            case "exponential":
                                echo pow($result1, $result2);
                                break;
                            default:
                                echo "Invalid operation.";
                                break;
                        }
                    } else {
                        echo "Please enter valid numbers.";
                    }
                }
                ?>
            </h2>

        </form>
    </div>
</body>

</html>