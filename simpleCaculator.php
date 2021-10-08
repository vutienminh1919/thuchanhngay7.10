<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number1 = $_POST["number1"];
    $operator = $_POST["operator"];
    $number2 = $_POST["number2"];
    $result = "";
    switch ($operator) {
        case ("Addition");
            $result = $number1 + $number2;
            break;
        case ("Subtraction");
            $result = $number1 - $number2;
            break;
        case ("Multiplication");
            $result = $number1 * $number2;
            break;
        case ("Division");
            $result = $number1 / $number2;
            break;
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <h1>Simple Calculator</h1>
    <fieldset>
        <legend>Caculator</legend>
        <table>
            <tr>
                <td>Frist operand</td>
                <td><input type="text" name="number1" value="<?php echo $number1; ?>"></td>
            </tr>
            <!--            <tr>-->
            <!--                <td>Operator</td>-->
            <!--                                <td><select style="width: 180px" name="operator">-->
            <!--                                        <option>+</option>-->
            <!--                                        <option>-</option>-->
            <!--                                        <option>*</option>-->
            <!--                                        <option>/</option>-->
            <!--                                    </select></td>-->
            <!--                <td><input type="text" name="operator"></td>-->
            <!--            </tr>-->
            <tr>
                <td>Second operand</td>
                <td><input type="text" name="number2" value="<?php echo $number2; ?>"></td>
            </tr>
            <tr>
                <td>Result</td>
                <td><input type="text" name="result" value="<?php echo $result; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="operator" value="Addition"></td>
                <td><input type="submit" name="operator" value="Subtraction"></td>
                <td><input type="submit" name="operator" value="Multiplication"></td>
                <td><input type="submit" name="operator" value="Division"></td>
            </tr>
        </table>
    </fieldset>
</form>


</body>
</html>