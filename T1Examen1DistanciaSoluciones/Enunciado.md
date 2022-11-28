# Ejercicio 1 (Obligatorio) - Repositorios (0 puntos)

* Crea un repositorio en github que se llame T1Examen1Distancia
    * Repositorio privado
    * En las opciones de creación marca "Add a README file"
* Desde la página de github edita README.md y añade tu nombre y apellidos y haz el commit que se sugiere al final de la página.
* En "Settings" -> "Manage access" invíta al profesor (xulioxesus@gmail.com) a colaborar en tu repositorio.
* Clona tu repositorio en la máquina de desarrollo
* A partir de este momento ya debes trabajar en la máquina de desarrollo
* Descomprime el contenido del archivo de la tarea del examen en tu repositorio. No borres el Enunciado.md.

# Ejercicio 2 - Pares e impares (2.25 puntos)

Crea un fichero "e2.php" que sólo va a contener código PHP.

* Dado un array de elementos cualquiera, por ejemplo:

    $arrayCualquiera = (4, 7, 4.5, "hola")

* Crea una función **isPar** a la que se le pasa un array como parámetro y **devuelve** otro array indicando si cada elemento del array es par o no. Para el caso anterior devolvería:

    [true,false,false,false]

* Crea una función **isImpar** que haga justo lo contrario y **devuelva** también un array:

    [false,true,false,false]

Prueba las funciones en el propio script e2.php.

Haz commit del ejercicio.

# Ejercicio 3 - Depurar y corregir (1 punto)

En el directorio e3 está la aplicación de blog con multitud de errores. ¡Alguien la ha destrozado! Debes reparar la aplicación con todos los fallos que encuentres.

* Empieza probando index.php
* Comenta cada modificación que hagas poniendo al inicio del comentario **tus iniciales**. 'JJLP' sería mi caso.
* Utilizar el depurador te ayudará bastante.
* Si no pones tus iniciales no se contabilizará la correción.

Haz commit del ejercicio.

# Ejercicio 4 - Clase Formulario (2.25 puntos)

Crea una carpeta e4 para este ejercicio. Debes crear un fichero Formulario.php para la clase descrita a continuación. Debes crear un fichero TestFormulario.php para las pruebas descritas.

## Formulario

- Tiene los atributos privados: nombre, apellidos, dni, accion y nombreFicheroFormulario.

- El constructor recibe los cuatro parámetros.

- Debes crear getters y setters **individuales** para cada atributo.

- Crea un método getViewEmpty (sin párametros) que devuelve el contenido del fichero nombreFicheroFormulario. Puedes utilizar la función **file_get_contents**. Debes sustituir "placeHolderAction", "placeHolderNombre", "placeHolderDNI" y "placeHolderApellidos" por la cadena vacía "";

- Crea un método **getView** similar al anterior, pero que devuelve en los placeHolder los atributos correspondientes.

- El método **__toString** tiene que hacer lo mismo que **getView**.


Haz commit del ejercicio.

# Ejercicio 5 - Array multidimensional (2.25 puntos)

Crea un fichero "e5.php" que sólo va a contener código PHP.

* Dado un array multidimensional, que representa nombres de marcas de coches, su stock y las ventas, como este:

    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );

    

* Crea un programa que imprime en forma de tabla (en html) todos los campos de los subelementos si el nombre del coche tiene más de cuatro letras y sus ventas son mayores que 10.

Haz commit del ejercicio.

# Ejercicio 6 - Herencia (2.25 puntos)

Crea una carpeta e6 para este ejercicio. Debes crear un fichero diferente para cada una de las clases descritas a continuación.

## Clase Empleado

- Tiene los atributos privados dni y sueldo.
- El constructor debe recibir dos parámetros e inicializar los atributos.
- Sobreescribe el método __get para tener getters para los dos atributos.
- Sobreescribe el método __set para tener setters para los dos atributos.
- Sobreescribe el método __toString para que la cadena generada tenga un formato amigable.

## Clase Gerente

- Hereda de Empleado.
- El constructor sólo recibe el dni y el sueldo siempre se fija a 100.000.
- Tiene un método **reunirse** que imprime el mensaje "Estoy reunido".
- Sobreescribe el método __toString para que la cadena generada tenga un formato amigable.

## Clase Programador

- Hereda de Empleado.
- El constructor recibe el dni y una especialidad ("php", "java", "pyhton").
- El salario se fija en 35.000.
- Tienen un método **programar** que imprime el mensaje "Estoy programando"
- Sobreescribe el método __toString para que la cadena generada tenga un formato amigable.

Haz commit del ejercicio.

# Ejercicio 7 (Obligatorio) - Finalizar y entregar el examen (0 puntos)

* Realiza un push a tu repositorio.