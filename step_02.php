<?php
$firstPage = 'step_01.php';
$nextPage = 'step_03.php';
$submit = 'next';
require_once './multiform.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Multiple form 2</title>
</head>

<body>
<?php if (isset($missing)) { ?>
    <p> Please fix the following required fields:</p>
    <ul>
        <?php
        foreach ($missing as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ul>
<?php } ?>
<form method="post" action="step_02.php">
    <p>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age">
    </p>
    <p>
        <input type="submit" name="next" value="Next &gt;">
    </p>
</form>
</body>
</html>
