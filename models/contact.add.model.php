<?php
    include('config/config.inc.php');

    include('models/pdo.inc.php');

    try {
        $query = "INSERT INTO contacts (id, email, title, content) 
        VALUES (null, :email, :title, :content)";

        $cursor = $pdo->prepare($query);
        $cursor->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $cursor->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
        $cursor->bindValue(':content', $_POST['content'], PDO::PARAM_STR);

        $cursor->execute();
        
        mail('ludovicdebever0@gmail.com', $_POST['title'], $_POST['content'], 'From: ' . $_POST['email']);
    }
    catch (Exception $err) {
        die($err);
        header('Location:index.php?error=1');
        exit;
    }