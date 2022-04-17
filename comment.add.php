<?php

    if (!isset($_POST["name"])) {
        die("Name required!");
    }

    if ($_POST["name"] == "") {
        die("Name required!");
    }

    include('models/comment.add.model.php');

    header('Location:index.php?notif=1');

    exit;
