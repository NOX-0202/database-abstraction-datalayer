<?php

    require __DIR__."/../vendor/autoload.php";

    use Source\Models\User;

    $user = new User();

    $list = $user->find()->fetch(true);

    foreach ($list as $users) {
        var_dump(
            $users->nome, // pega a coluna
            $users->data() // pega a linha
        );
    }


/*
 * use CoffeeCode\DataLayer\Connect;
    $conn = Connect::getInstance();
    $error = Connect::getError();

    if ($error) {
        echo $error->getMessage();
        die();
    }

    $query = $conn->query("SELECT * FROM users");

    var_dump($query->fetchAll());

*/

