<div style="text-align:center;">
<img style="width:500px;"  src="https://res.cloudinary.com/manuelcodex/image/upload/v1688821217/manuel.alcazar_a_Valknut_logo_with_a_black_background_each_of_t_29acc2a5-483b-49f7-8fd5-ba2751df2699_qexuv3.png">
</div>

```
Proyecto para pruebas en PHP basado en el curso de pildoras informáticas
```
#
## Clase 29, Programación orientada a objetos. Método Estático

- Archivo concesionario.php

operador = **self**
```
Utilización del operador  seguido de dos " : " unido a la variable que queremos usar.
Creamos un método para manejar la variable $ayuda. Ya que así controlamos que no se pueda modificar
```

- Archivo indexConcex.php
```
Utilizamos el método creado, para utilizar el descuento en cada utilización de la clase de compra de vehiculo
Compra_vehiculo::descuento_gobierno();
```
#
## Clase 30, Arrays

```
Explicación de diferentes tipos de array:
Array indexado: $array[];
Array asociativo : $array= array("clave1" => "valor1, "clave2"=> "valor2")

```
#
## Clase 31, Arrays II

```
Función is_array() para comprobar si una variable es un array o no.
bucle foreach permite recorrer un array. 
```
**foreach($array as $clave => $valor)**
```
Función is_array() para comprobar si una variable es un array o no.
Bucle foreach permite recorrer un array. 
Para agregar un elemento a un array asociativo: $array ["Clave3"]= "Valor3";
```
#
## Clase 47, Problema:  Inyección SQL

```
Posibilidad de que el usuario "inyecte" código SQL con el propósito de visualizar, editar o eliminar los datos guardados.
Se introduce lo solicitado en el input de búsqueda ( ejemplo) y...
```
**" or '1' = '1'**
```
esto inyecta la condicion 1 = 1, que siempre es verdadero y por tanto muestra todos los datos.
```
#
## Clase 48, Solución: Inyección SQL

```
mysqli_real_escape_string($conexion, string que analizamos para comprobar si tiene algún carácter extraño); La función escapa de carácteres como: &, '', ||, etc.
$usuario = mysqli_real_escape_string($conexion, $_GET["usuario"]). 
```
```
mysqli_affected_rows() --> Verifica si hay filas afectadas por una operación previa en MySQL.
- mysqli_affected_rows($conexion);
Sirve para verificar si hay filas afectadas durante el control de inyección SQL.
```
```
mysqli_add_slashes() --> evitar los carácteres más usados durante una consulta SQL. No tan seguro como mysqli_real_escape_string()
```
#
## Clase 49, Consultas preparadas y Clase 50, Consultas preparadas II

```
Evitan la inyección SQL.
```
1. Creamos sentencias SQL sustituyendo los valores de criterio por el símbolo '?'. 
    - $sql = "SELECT * FROM PRODUCTOS WHERE PAISDEORIGEN = ?" ;
2. **Preparar la consulta mediante la función mysqli_prepare()**. Requiere el objeto conexión y la sentencia SQL, 
    - $resultado= mysqli_prepare($conexion, $sql) --> devuelve un objeto Mysqli_stmt.
3. Unir parámetros mediante **mysqli_stmt_bind_param()**. Devuelve true o false.
    - Función que requiere 3 parámetros: el objeto mysqli_stmt, el tipo de dato que se utilizará como criterio en sql, variable con criterio.
    - Tipos de datos: "s" String, "i" Int o number, "d" Float
    - En el caso de que queramos **insertar**, hay que incluir como variable todos aquellos campos que se van a modificar.
4. Ejecutar la consulta con la función **mysqli_stmt_execute()**. Devuelve true o false.
    - Necesita como parámetro el objeto mysqli_stmt
5. Asociar variables al resultado de la consulta. Mediante la función
    - **mysqli_stmt_bind_result()**. Devuelve true o false.
    - Necesita cómo parámetros el objeto mysqli_stmt y tantas variables como columnas en consulta sql.
6. Lectura de valores. Recorrer lo que devuelve la consulta.
    - Función **mysqli_stmt_fetch()**
    - Pide como parámetro el objeto mysqli_stmt
7. Cerrar la consulta mediante:
    Función **mysqli_stmt_close()**
    - Como parámetro el objeto mysqli_stmt
#
## Clase 51, Conexión a una BBDD con POO
### Forma 1 --> MYSQL
- Obsoleta desde hace tiempo.
### Forma 2 --> MYSQLi
- Existen dos estilos a la hora de conectar a una base de datos mediante este modelo
    - Procedimental
        - En los ejemplos relizados hasta esta clase se ha utilizado esta
    - Orientado a objetos (Clases de 22 a 29) --> Programación orientada a objetos en el curso
        - Estilo más moderno.

 ### MSQLi basado en POO
1. Debemos establecer la conexión mediante:
- Creando una variable conexion
```
$conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre)
``` 
- En la forma procedimental se utiliza mysqli_set_charset ($conexion, "utf-8"), para establecer el conjunto de caracteres predeterminado del cliente.
    - Debemos transformar esta función para utilizarla en el método POO
```
$conexion->set_charset("utf-8");
```
- Y realizamos la consulta mysql para que aparezcan todos los elementos de una base de datos.
```
$sql = "SELECT * FROM PRODUCTOS";
$resultado = $conexion->query($sql);
```
# 
***mysqli_errno() --> devuelve el código de error de la última función llamada***
### Orientado a objetos
***($conexion->errno)***
# 
***mysqli_fetch_assoc() --> Obtener una fila de resultado como un arrya asociativo***
### Orientado a objetos
***($fila = $resultado->fetch_assoc())***
- Con este método al llamar al array asociativo $fila, podemos dirigirnos a los campos de la tabla directamente con sus nombres
***($fila = $resultado->fetch_array())***
- Con este método al llamar al array asociativo $fila, podemos dirigirnos a los campos de la tabla directamente con sus indices.
# 
***mysqli_close() --> Cierra una conexión previamente abierta a una base de datos***
### Orientado a objetos
***$conexion->close()***

### Forma 3 --> PDO (PHP Data Object)
#
## Clase 52, Conexión a una BBDD mediante PDO
- Denominada como capa de abstracción, libreria que si situa en medio entre el código PHP y las bases de datos.
- https://www.php.net/manual/es/book.pdo.php
1. Instanciamos la clase PDO llamando a la clase PDO con 3 parámetros: 'host+nombreBBDD', 'usuario', 'contraseña'.
```
$base=new PDO('mysql:host=localhost;dbname=pruebas', 'root', '');
```
Cuando se produce un fallo lo denominamos una "excepción". 

Un fallo que no está relacionado con la sintaxis si no con otro tipo de causas.
- Las excepciones generan un objeto (objeto fallo), que se ubicará dentro de un bloque try / catch;
Dentro del **try** introducimos la instancia y dentro del **catch** recibe un argumento / objeto de tipo  **Exception**. 
- Podemos incluir una tercera funcionalidad dentro del bloque try / catch denominada **finally** que funcionará siempre, tanto si entra en el try como si entra en el catch.

- Podemos acceder a diferentes opciones dentro del obejeto Exception.
    - Guardamos todas esas opciones dentro de la variable $e
    - GetMessage--> devuelve el error
```
catch(Exception $e){
    die ('Error: ' . $e->getMessage());
}
```
**Utilidades de incluir $variable = null en finally**
- Liberar recursos
- Evitar estados inconscientes: en caso de que se produzca una exception, evita que la variable se utilice en un estado incosciente en código posterior.
- Limpieza general: Recomendable limpiar variables que ya no son necesarias, especialmente tras operaciones críticas.
#
## Clase 53, PDO consultas preparadas
- Utilizamos el metodo prepare() para generar un objeto de tipo **PDOStatemen**.
- https://www.php.net/manual/es/pdo.prepare.php
- https://www.php.net/manual/es/pdostatement.execute.php

```
    $sql= "SELECT NOMBREARTICULO, SECCION, PRECIO, PAISDEORIGEN FROM PRODUCTOS WHERE NOMBREARTICULO = ?";

    $resultado = $conexion->prepare($sentencia);
    $resultado-> execute(array("Destornillador"));
```
- El método execute busca dentro de la sentencia SQL que declaramos anteriormente, en la columna "NOMBREARTICULO" el elemento destornillador.
- https://www.php.net/manual/es/pdostatement.fetch.php
- Función fetch para recorrer la tabla, y devolver todos aquellos elementos que le solicitamos previamente.
```
 while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
        echo "Nombre artículo" . $registro['NOMBREARTICULO'] . "SECCIÓN: " . $registro['SECCION'] . " Precio: " . $registro['PRECIO'] . " País de origen: " . $registro['PAISDEORIGEN'] . "<br>";
    }
```
- Creando una variabe, llamando al método GET para traer desde un input de otro archivo el valor de búsqueda del usurio y colocando esa variable en el método execute($variable).
#
## Clase 54, Marcadores en consultas preparadas
- Se forma mediante " :nombreQueLeQueramosDar, en este ejemplo :n_art
```
    $sql= "SELECT NOMBREARTICULO, SECCION, PRECIO, PAISDEORIGEN FROM PRODUCTOS WHERE NOMBREARTICULO = :n_art";
    $resultado = $base->prepare($sql);
    $resultado-> execute(array(":n_art"=>$busqueda));
```
#
- Para buscar diferentes elementos en la consulta
```
$seccion = $_GET['seccion'];
$pais= $_GET['pais'];

    $sql= "SELECT NOMBREARTICULO, SECCION, PRECIO, PAISDEORIGEN FROM PRODUCTOS WHERE SECCION = :SECC AND PAISDEORIGEN = :PAIS";
    $resultado = $base->prepare($sql);
    $resultado-> execute(array(":SECC"=>$seccion, ":PAIS" => $pais));
```
## Clase 55, Dudas ( falta ver video)

## Clase 56, PDO para insertar y eliminar
- Ventajas de utilizar marcadores al insertar valores en una BBDD
    - Comodidad, cuando tenemos varios parámetros en una consulta SQL.
- Los nombres de los VALUES, no tienen que coincidir con nada del código anterior a esa consulta, sólo deben coincidir en cantidad de elementos con los campos de la consulta.
```
    $sql="INSERT INTO PRODUCTOS (CODIGOARTICULO, SECCION, NOMBREARTICULO, PRECIO, FECHA, IMPORTADO, PAISDEORIGEN) VALUE (:c_art,:seccion,:n_art, :precio, :fecha :importado, :p_orig )";
    $resultado = $base->prepare($sql);
    $resultado-> execute(array(":c_art"=>$c_art, ":seccion" => $seccion, ":n_art" => $n_art, ":precio" => $precio, ":fecha" => $fecha, ":importado" => $importado, ":p_orig" => $p_orig));

```
- Eliminar elementos
```
    $sql="DELETE FROM PRODUCTOS WHERE CODIGOARTICULO= :c_art";
    $resultado = $base->prepare($sql);
    $resultado-> execute(array(":c_art"=>$c_art));
```
#
## Clase 57, Conexión a BBDD utilizando Clases POO --> carpeta BBDDconClasesPOO
1. Creamos un primer archivo donde vamos a incorporar la variables de entorno de nuestra BBDD
2. Creamos un archivo de conexion a esa base de datos mediante una clase **Conexion**.
- Dentro del método constructor incorporamos el código para conectarnos a esa base de datos.
    - De esta manera garantizamoss que cada que se crea una instancia de la clase **Conexion** se establezca automáticamente una conexión con la base de datos.
    - Permite manejar cualquier error de conexión inmediatamente y mostrar un mensaje de error si la conexión falla.
### Modularización --- reutilización de código y mejorar el manejo de errores.
3. Archivo devProductos aplicamos la herencia de clases
- Con el método parent ejecuta el constructor de la clase conexion.
```
parent::__construct();
public function getProducts(){
        $resultado=$this->conexion_db->query("SELECT * FROM PRODUCTOS");
    }
```
- Utilizamos la variable conexion_db, directamente de la clase padre sin declararla en esta.
4. Último archivo para visualizar los datos, llamando al archivo devProductos.php y creando una variable a raiz de la clase DevuelveProductos.
- Llamamos al método **getProducts** declarado en la clase devuelveProducts
#
## Clase 58, conexión a BBDD utilizando clases POO y PDO ( extra de 57)
**Conexión como en clase 52**, mediante try and catch configuramos la conexión.
```
    public function getProduct($dato){
        $sql="SELECT*FROM PRODUCTOS WHERE PAISDEORIGEN=' " . $dato .  " ' ";
        $sentencia=$this->conexion_db->prepare($sql);
    }

```
#
## Clase 59, Sistema de login
Realizamos una llamada al base de datos mediante PDO como en otros ejercicios, pero una vez utilizado el método prepare() ...
- Utilizamos las funciones:
    - **htmlentities()** --> Convierte caracteres especiales en entidades HTML. Útil cuando se desea mostrar texto en una página web y se quiere asegurar que los caracteres no sean interpretados como código HTML, sino como texto literal.
    - **htmlentities(addslashes())**--> Con esta función escapamos los caractere especiales con barra invertida. Útil cuando se necesita insertar datos en una adena que será utilizada en una consulta de base de datos o en cualquier otro contexto donde se requira escapar los caracteres especiales para evitar problemas de seguridad o errores de sintaxis.
        - Es útil pero es más eficaz utilizar la función **mysqli_real_escape_string()**.
    - **bindValue("marcador", variable)** --> Se utiliza para ejecutar sentencias SQL de manera segura y eficiente. Enlazando valores a parámetros en una sentencia preparada.
```
 $login=htmlentities(addslashes($_POST["login"]));
    $password=htmlentities(addslashes($_POST["password"]));
    $resultado->bindValue(":login", $login);
    $resultado->bindValue(":password", $password);
```
- **rowCount()** --> Número de registros que devuelve una consulta.
    - Si no existe devuelve un 0 y si existe devuelve un 1.
```

```
