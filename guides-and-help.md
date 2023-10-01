La programación orientada a objetos es una forma de programar, un paradigma o una técnica. Los conceptos que aquí aprendiste te servirán en PHP y en otros lenguajes de programación. Recordemos que para programar de esta forma en realidad debemos crear objetos, y un objeto es una instancia de una clase y una clase es el molde. Ejemplo:

Programación orientada a objetos: es la técnica.
PHP: es el lenguaje de programación (donde implementamos la técnica).
Podemos resumir los diferentes conceptos de la siguiente manera:

Herencia: compartir métodos entre clases padres y clases hijas.
Abstracción: significa aislar, separar y sacar.
Polimorfismo: capacidad o virtud que tienen los métodos donde, por ejemplo, un mismo método puede tener diferentes comportamientos y dar diferentes resultados.
Modularidad: este principio básicamente nos ayuda a tener cada vez piezas de código más pequeñas y entendibles, donde cada pieza es un módulo y muchos módulos forman el sistema entero.
Encapsulamiento: un objeto debe estar aislado y ser un módulo natural. Esto se cumple aplicando la protección a las propiedades impidiendo su modificación y básicamente se refiere a controlar el acceso.
Al entender este estilo conseguimos organizar mucho mejor nuestro código agrupando tareas comunes para crear una sola solución y usarla las veces que sean necesarias en nuestro proyecto. Evitamos con esto repetir código y ganamos mucho al dar mantenimiento en el futuro.

Comienza con la palabra reservada class.
El código va entre llaves { }.
La información se guarda en propiedades que pueden ser públicas, privadas o protegidas.
Cada acción la colocamos en métodos que básicamente son funciones o bloques de código dentro de una clase.
$this es una variable reservada por el lenguaje que podemos usar para acceder a elementos propios, siempre y cuando estemos en la instancia de la clase.
new es la palabra clave usada para crear un objeto a partir de una clase.
En el mundo de la programación tenemos muchas técnicas y formas, podemos instanciar una clase dentro de otra y navegar por sus métodos sin restricción.


    <?php
    
    class User 
    {

        public $type;

    }

    class Admin 
    {

        public function greet() 
        {
            echo "Hola Administrador";
        }

    }

    $user = new User;
    $user->type = new Admin;
    $user->type->greet();



    <?php
    
    class Person 
    {
    
        public function greet() 
        {
            echo "Hola $this->name";
        }

    }

    class User 
    {
        public $type;
    }

    class Admin extends Person 
    {
        public $name = 'Administrador';
    }

    $user = new User;
    $user->type = new Admin;
    $user->type->greet();

Son conceptos, métodos o formas que usamos a veces sin saber que estos conceptos existen. Revisa en detalle cada cosa y trata de hacer un ejercicio por concepto para que estos formen parte de ti.







Me encantó dar un repaso por los conceptos de Programación Orientada a Objetos, sueles llevar mucho tiempo haciendo código que se te olvida que la teoría también es importante, me está gustando mucho este curso, aún así sigo pensando que el concepto de Herencia debió de haber sido el primer concepto de todos a enseñar jaja, pero fuera de eso está genial.

Si estás en este punto y aún tienes dudas, te recomiendo mirar los capítulos de nuevo, son muy claros, solo debes analizarlos, no te preocupes si no los entiendes, cuesta un poco al inicio pero con perseverancia lo logras, a mi me tomó tiempo entenderlos, asimilarlos y aplicarlos, ¡No te desanimes! Haciendo mi aporte, trataré de explicar todo con palabras muy simples:

Programación Orientada a Ojetos: Es una forma de programación que representa objetos del mundo real en código, haciendo uso de clases, que pueden ser vistas como plantillas.

Clase: Una clase es una plantilla del objeto, esta define qué propiedades contiene y qué acciones puede realizar, siempre actuando como una plantilla.

Instancia: Una instancia es básicamente usar la clase que tenemos como plantilla y asignar propiedades a dicha instancia, una instancia es básicamente ese "$var = new Clase();" eso es todo, eso es una instancia.

Por ejemplo, puedo tener la clase Coche, que tiene como atributo el color, y puedo tener dos instancias de esa clase, una instancia me puede decir que el coche es color azul y la otra instancia me puede decir que el coche es rojo, tengo dos objetos diferentes que hacen referencia a una misma clase.

Método: No nos compliquemos, es una manera "fancy" de llamarle a una función dentro de una clase, un método es una función, listo, la única diferencia es que el método esta dentro de una clase, that's all.

Propiedad/Atributo: Exactamente lo mismo, una propiedad o un atributo es una manera "fancy" de llamarle a una variable que está dentro de una clase, pero es eso, es una variable, la única diferencia es que está dentro de una clase.

Herencia:* Es, como su nombre lo dice, heredar los métodos y propiedades de una clase en otra clase, siempre y cuando puedan ser heredados, y el si pueden o no pueden ser heredados lo define el encapsulamiento.

Encapsulamiento: Es el "alcance" de las variables, es decir, definen quién pueden ser heredada, quién no, quién puede ser manipulada desde fuera de la clase, etc. Usando las palabras "private, protected y public", les recomiendo leer mi aporte en la clase de encapsulamiento pues lo explico con mucho más detalles y ejemplos :D

Polimorfismo: Uy, esta palabra da escalofríos de solo leerla, ¿Verdad? ¿Y si te digo que detrás de este monstruo se esconde un lindo y tierno gatito? Polimorfismo no es más que hacer que una clase se comporte de maneras distintas sobreescribiendo algunos de sus méotodos, y la manera de sobreescribirlos es heredando esa clase. Básicamente es "hacer que una clase pueda tener varias formas" ¡Como Dito!, ¿Conocen ese Pakiman? ¡Es una criatura polimórifica!

Modularidad: Dividir tu código o proyecto en varias partes o archivos, así es más fácil de leer y mantener

Espero poder aclarar algunas dudas, este tema puede parecer complicado al inicio pero la verdad es muy fácil, ¡No se rindan! :D









En esta clase se mencionó algo muy importante, y es el tipo de dato que se espera, cuando trabajamos con parámetros en las funciones es posible especificar qué tipo de dato estamos esperando, esto hace que sea un código mejor estructurado y te acerca más a las buenas prácticas, de igual manera, los métodos de las clases pueden especificar qué tipo de dato se va a retornar, así le confirmamos 100% a quien use nuestra clase que vamos a retornarle si o si tal tipo de dato, por ejemplo, en esta clase:


    <?php

        namespace App;

        class Comment {

            public $like_count = 0;

            public function like(User $usuario) : int {
                return $this->like_count;
            }
            
        }
    ?>
Vemos que hay un método que espera como parámetro "User $usuario", esto quiere decir que, el parámetro $usuario tiene que ser si o si una instancia de la clase Usuario, si yo reemplazara "User" por "string" le estarían diciendo que espero que el parámetro $usuario sea una cadena de texto.

De igual manera, es función tiene al final " : int" esto está diciendo que el método va a devolver si o si un entero, de esta manera podemos hacer un código más robusto y a prueba de errores.