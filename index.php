<?php

    ini_set('display_errors', 1);

    // set time zone
    date_default_timezone_set('Europe/Rome');

    // require all trait
    require_once 'trait.php';

    // require all classes
    require_once 'User.php';

    // new istance -> User: new user
    $new_user = new User('Mario', 'mario22', 'mario@gmail.com');
    var_dump($new_user);

    // date_default_timezone_set('Europe/Rome');
    // $cur_date = date('Y-m-d H:i:s');
    // var_dump($cur_date);
?>
