
### `archer_options.php`

```php
<?php
$archer_id = $_POST['archer_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archer Options</title>
</head>
<body>
    <h1>Choose Option</h1>
    <form action="casual_or_competitive.php" method="POST">
        <input type="hidden" name="archer_id" value="<?php echo $archer_id; ?>">
        <button type="submit" name="option" value="casual">Casual</button>
        <button type="submit" name="option" value="competitive">Competitive</button>
    </form>
</body>
</html>
