<!DOCTYPE html>
<html>

<head>
    <meta chearset= "utf-8">
    <title>Documento sin título</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body class="container ">
    <form class="d-flex flex-column w-50 mx-auto bg-secondary-subtle p-4 rounded-3" action="resultados_insertar_registros.php" method="get">
        <label>Código Artículo: <input type="text" class="form-control" name="c_art"></label>
        <label>Seccion: <input type="text" class="form-control" name="secc"></label>
        <label>Nombre Artículo: <input type="text" class="form-control" name="n_art"></label>
        <label>Precio: <input type="text" class="form-control" name="pre"></label>
        <label>Fecha: <input type="text" class="form-control" name="fec"></label>
        <label>Importado: <input type="text" class="form-control" name="imp"></label>
        <label>País de Origen: <input type="text" class="form-control" name="p_ori"></label>

        <input type="submit" name="enviando" class="btn btn-success mt-3" value="Enviar">        
    </form>
</body>
</html>