<?php

    class User {
        public $name;
        public function __construct($name){
            $this->name = $name;
        }

        //Con final no se puede sobreescribir en clases hijas
        // Es una clase que no se puede usar para heredar
        final public function getName(){
            return $this->name;
        }
    }


    class Admin extends User {
        // ...
    }

    $admin = new Admin("SantiagoAdmin");
    echo $admin->getName();