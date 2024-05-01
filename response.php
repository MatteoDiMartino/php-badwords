<?php 

$getTxt = $_GET['userTxt'];

$getTxt = str_replace('caz','***', $getTxt);
$getTxt = str_replace('mer','***', $getTxt);
$getTxt = str_replace('cul','***', $getTxt);
$getTxt = str_replace('dio','***', $getTxt);
$getTxt = str_replace('str','***', $getTxt);
$getTxt = str_replace('fro','***', $getTxt);
$getTxt = str_replace('ric','***', $getTxt);
$getTxt = str_replace('neg','***', $getTxt);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La tua frase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<div class="container">
    <div class="d-flex">
        <div>
           <span class="fs-1  fw-bold"> <?php echo $getTxt ?> </span>
            <div>
               <small class="fs-5"> <?php echo strlen($getTxt) . ' ecco la lunghezza del tuo paragrafo' ?> </small>
            </div>
        </div>
    </div>
</div>
</body>
</html>