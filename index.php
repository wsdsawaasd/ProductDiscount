<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="index.php">
    <label>Product Description:
        <input type="text" name="description">
        <br/>
        <br/>
        List Price:
        <input type="text" name="price">
        <br/>
        <br/>
        Discount Percent:
        <input type="text" name="discount"> (%)
    </label>
    <br>
    <br>
    <input type="submit" value="calculate discount">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $_POST["description"];
    $price = $_POST["price"];
    $discount = $_POST["discount"]/100;
    $discountAmount = $price * $discount * 0.1;
    echo "Discount Amount : " . $discountAmount ;
    echo "<br/>";
    echo "Discount price : " . ($price-$discountAmount);
    echo "<br/>";
    echo "product Description : " . $description;
}
?>
</body>
</html>
