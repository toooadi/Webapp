<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600;700&display=swap" rel="stylesheet">
    <title>About</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Recipes</a></li>
            <li><a href="addRecipe.html">Add Recipe</a></li>
            <li><a href="foodApp.html">Cook</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
    </nav>

<form>
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    
    <select name="operation">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>

</form>
<p> The answer is: </p>
<?php
    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operation'];
        switch ($operator) {
            case "None":
                echo "Need to select operator";
                break;
            case "Add":
                echo $result1 + $result2;
                break;
            case "Subtract":
                echo $result1 - $result2;
                break;
            case "Multiply":
                echo $result1 * $result2;
                break;
            case "Divide":
                echo $result1 / $result2;
                break;
        }

    }
?>
    
</body>
</html>