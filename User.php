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
            try {
                $this -> checkName($_name, 4, 20);
            } catch (Exception $e) {
                echo $e -> getMessage();
            }

            $this -> nickname = $_nickname;
            $this -> mail = $_mail;
            $this -> lastname = $_lastname;
            $this -> date_of_birth = $_date_of_birth;
            $this -> created_at = $this -> getCurDateTime();
        }

        protected function checkName($_name, $_min, $_max) {
            // 1 - check if it's is_string
            // 2 - check if strlen <= max char
            // 3 - check if strlen > min char
            if (is_string($_name) && strlen(trim($_name)) <= $_max && strlen(trim($_name)) >= $_min) {
                $this -> name = $_name;
            } elseif (is_string($_name)) {
                throw new Exception("Error Processing Request: inserisci una stringa di lunghezza compresa fra " . $_min . " e " . $_max);
            } else {
                throw new Exception("Error Processing Request: inserisci una stringa");
            }
        }

        public function getAllInfo() {
            return [
                'name' => $this -> name,
                'lastname' => $this -> lastname,
                'nickname' => $this -> nickname,
                'date_of_birth' => $this -> date_of_birth,
                'mail' => $this -> mail,
            ];
        }

        public function printInfo() {
            $allInfo = $this -> getAllInfo();

            foreach ($allInfo as $key => $value) {
                echo $key . ": " . $value . "<br>";
            }
        }
    };

?>
