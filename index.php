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
    // var_dump($user_1);

    $user_2 = new User('Maria', 'maria1', 'mar22@hotmail.it', 'Verdi');
    // var_dump($user_2);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Lista utenti</title>
    </head>
    <body>
        <main>
            <div class="container">
                <h1>Lista utenti</h1>
                <ul>
                    <li>
                        Utente 1
                        <ul>
                            <?php $user_1 -> printInfo(); ?>
                        </ul>
                    </li>
                    <li>
                        Utente 2
                        <ul>
                            <?php $user_2 -> printInfo(); ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </main>
    </body>
</html>
