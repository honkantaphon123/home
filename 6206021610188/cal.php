<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $fruit = $_GET["fruit"];
    $width = $_GET["width"];
    $kg = $_GET["kg"];

    if ($fruit == "banana") {
        echo '<center><img src = "image/banana.jpg "';
        echo 'width = ' . $width .  '"<px><br>"';
        echo 'ราคาต่อกิโลกรัม = 100 บาท / Kilogram.<br>จำนวนกิโลกรัม = ' . $kg . ' Kilogram.<br>ราคารวม = ' . (100 * $kg) . ' บาท';
    } else if ($fruit === "apple") {
        echo "<center><img src = image/apple.jpg width = " . $width . " px><br>";
        echo 'ราคาต่อกิโลกรัม = 200 บาท / Kilogram.<br>จำนวนกิโลกรัม = ' . $kg . ' Kilogram.<br>ราคารวม = ' . (200 * $kg) . ' บาท';
    } else if ($fruit === "western") {
        echo "<center><img src = image/western.jpg width = " . $width . "px><br>";
        echo 'ราคาต่อกิโลกรัม = 300 บาท / Kilogram.<br>จำนวนกิโลกรัม = ' . $kg . ' Kilogram.<br>ราคารวม = ' . (300 * $kg) . ' บาท';
    }



    ?>
</body>

</html>