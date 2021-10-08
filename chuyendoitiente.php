<!tml>
<head>
    <meta charset="doc">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="money">
    <button type="submit">Convert VND to USD</button>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        function convert(){
            $vnd = $_POST["money"];
            $usd = $vnd / 23000;
            echo "<br>". $usd."$";
        }
    }
    convert()
    ?>
</form>

</body>
</html>