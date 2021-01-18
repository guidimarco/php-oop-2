<?php

    class User {
        // instance var
        protected $name; // not null
        protected $lastname; // null
        protected $nickname; // not null, unique
        protected $date_of_birth; // null
        protected $mail; // not null, unique
        private $created_at; // default

        public function __construct($_name, $_nickname, $_mail, $_lastname = null, $_date_of_birth = null) {
            // assign to var
            $this -> name = $_name;
            $this -> nickname = $_nickname;
            $this -> mail = $_mail;
            $this -> lastname = $_lastname;
            $this -> date_of_birth = $_date_of_birth;
        }
    };

?>
