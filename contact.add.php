<?php

    if (!isset($_POST["email"])) {
        die("Email required!");
    }

    if ($_POST["email"] == "") {
        die("Email required!");
    }

    include('models/contact.add.model.php');

    header('Location:index.php?notif=1');

    exit;
