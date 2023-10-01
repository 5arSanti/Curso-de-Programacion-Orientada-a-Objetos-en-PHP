<?php

    include "./Admin.php";
    include "./User.php";
    include "./Guest.php";

    abstract class Base {
        protected $name;

        private function getClassName() {
            return get_called_class();
        }

        public function login() {
            return "Mi nombre es $this->name y me esta llamando ". $this->getClassName() . "<br>";
        }
    }





    $guest = new Guest();
    echo $guest->login();

    $user = new User("Santiago");
    echo $user->login();

    $admin = new Admin("Santiago Admin");
    echo $admin->login();