<!DOCTYPE html>
<html>

<head>
    <meta chearset= "utf-8">
    <title>Documento sin título</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
    <form action="vistaProductos.php" method="get" class="container d-flex flex-column w-50 bg-success">
        <!-- <label class="text-light">Seccion: <input class="form-control" type="text" name="seccion"></label> -->
        <label class="text-light">País <input class="form-control" type="text" name="pais"></label>
        <input type="submit" name="enviando" value="Enviar" class="btn btn-dark my-4 mx-auto w-50">
        
    </form>
</body>
</html>