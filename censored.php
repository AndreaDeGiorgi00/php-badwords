<?php   
   $text =  $_GET['paragrph'];
   $censoriship = $_GET['censoriship'];
   $newText = str_replace($censoriship, '***' , $text);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <h1>all'inizio</h1>
    <h3><strong>il testo era:</strong></h3>
    <p><?php echo $text ?></p>
    <br>
    <h3><strong>ed era lungo:</strong></h3>
    <p><?php echo strlen($text) ?> caratteri</p>
    <hr>
    <h1>adesso</h1>
    <h3><strong>il testo è:</strong></h3>
    <p><?php echo $newText ?></p>
    <h3>ed è lungo</h3>
    <p><?php echo strlen($newText) ?> caratteri</p>
    
</body>
</html>