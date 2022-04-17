<?php
    include('config/config.inc.php');

    include('models/pdo.inc.php');

    try {
        $query = "INSERT INTO comments (id, name, content)
        VALUES (null, :name, :content)";

        $cursor = $pdo->prepare($query);
        $cursor->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        $cursor->bindValue(':content', $_POST['content'], PDO::PARAM_STR);

        $cursor->execute();
    }
    catch (Exception $err) {
        die($err);
        header('Location:index.php?error=1');
        exit;
    }