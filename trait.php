<?php

    // get current date + time
    trait CurrentDateTime {
        public function getCurDateTime() {
            return date('Y-m-d H:i:s');
        }
    }

?>
