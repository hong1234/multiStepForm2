<?php
// set required fields
$required = ['city', 'country'];
$firstPage = 'step_01.php';
$nextPage = 'step_04.php';
$submit = 'next';
require_once './multiform.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Multiple form 3</title>
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
<form method="post" action="step_03.php">
    <p>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address">
    </p>
    <p>
        <label for="city">Town/City:</label>
        <input type="text" name="city" id="city">
    </p>
    <p>
        <label for="country">Country:</label>
        <select name="country" id="country">
            <option value="" selected>Please Select</option>
            <option value="Canada">Canada</option>
            <option value="France">France</option>
            <option value="Germany">Germany</option>
            <option value="Japan">Japan</option>
            <option value="UK">United Kingdom</option>
            <option value="USA">United States</option>
            <option value="other">Other</option>
        </select>
    </p>
    <p>
        <input type="submit" name="next" value="Send details">
    </p>
</form>
</body>
</html>
