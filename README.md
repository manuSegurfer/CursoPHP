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

