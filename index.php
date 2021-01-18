<?php

    ini_set('display_errors', 1);

    // set time zone
    date_default_timezone_set('Europe/Rome');

    // require all trait
    require_once 'trait.php';

    // require all classes
    require_once 'User.php';

    // new istance -> User: new user
    $user_1 = new User('Mario', 'mario22', 'mario@gmail.com');
    var_dump($user_1);

    $user_1_info = $user_1 -> getAllInfo();
    var_dump($user_1_info);

    $user_2 = new User('Maria', 'maria1', 'mar22@hotmail.it', 'Verdi');
    var_dump($user_2);
?>
