<?php

    ini_set('display_errors', 1);

    // require all classes
    require_once 'User.php';

    $new_user = new User('Mario', 'mario22', 'mario@gmail.com');

    var_dump($new_user);
    // var_dump($new_user -> lastname);
?>
