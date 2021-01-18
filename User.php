<?php

    class User {
        // trait ref
        use CurrentDateTime;

        // instance var
        protected $name; // not null
        protected $lastname; // null
        protected $nickname; // not null, unique
        protected $date_of_birth; // null
        protected $mail; // not null, unique
        private $created_at; // default

        public function __construct($_name, $_nickname, $_mail, $_lastname = null, $_date_of_birth = null) {
            // assign to var
            if ($this -> checkStr($_name, 20)) {
                $this -> name = $_name;
                echo "ok";
            } else {
                echo "non ok";
            }

            $this -> nickname = $_nickname;
            $this -> mail = $_mail;
            $this -> lastname = $_lastname;
            $this -> date_of_birth = $_date_of_birth;
            $this -> created_at = $this -> getCurDateTime();
        }

        protected function checkStr($_str, $_max) {
            $is_ok = false; // sentinel

            // 1 - check if it's is_string
            // 2 - check if strlen <= max char
            if (is_string($_str) && strlen(trim($_str)) <= $_max) {
                $is_ok = true;
            }

            return $is_ok;
        }
    };

?>
