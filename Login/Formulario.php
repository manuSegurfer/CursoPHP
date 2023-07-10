<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<h1>Introduce tus datos</h1>

<form action="<?php echo $_SERVER["PHP_SELF"] ;?>" method="post">
    <div class="d-flex flex-column w-50 mx-auto">
<label for="login"><input class="form-control w-50 mx-auto" type="text" name="login" placeholder="Name..."></label> 
<label for="password"><input class="form-control w-50 mx-auto my-2"  type="password" name="password" placeholder="Password..."></label>
<input class="btn btn-primary w-50 mx-auto" type="submit" value="Login" name="enviar">
</div>
</form>

</body>
</html>