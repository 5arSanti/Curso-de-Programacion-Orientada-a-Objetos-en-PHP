<?php

    //El que se va a hacer se decide en una interface
    // Y el como se va a hacer y la implementacion se define en una clase

    // Una interface es un contrato, que aquella clase que se implemente esta obligada a desarrollarllas
    //Crear la logica necesaria para que sea desarrollada a traves de clases
    interface Person {
        public function getName();
    }


    class Admin implements Person {
        public $name;

        public function __construct($name){
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }
    }


    $admin = new Admin("Santiago Admin");
    echo $admin->getName();