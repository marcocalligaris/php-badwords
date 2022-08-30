<?php 
$text = 'How much wood would a woodchuck chuck if a woodchuck could chuck wood?';
$badword = $_GET['name'];
$new_text = str_replace($badword, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <h3><?php echo $text ?></h3>
    <h2>Length: <?php echo strlen($text) ?> characters</h2>
    <h1>New text: <?php echo $new_text ?></h1>
    <h2>New length: <?php echo strlen($new_text) ?> characters</h2>
</body>
</html>
