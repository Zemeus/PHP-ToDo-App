<?php
    session_start();
    require_once('includes/config.php');
    require_once('includes/db_connection.php');
    require_once('includes/functions.php');

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        if(isset($_POST['todo'])) {
            $todo = trim(htmlspecialchars($_POST['todo']));

            $query = "INSERT INTO todos (todo) VALUES ('{$todo}')";
            $connection->exec($query);
        }

        $query = $connection->prepare('SELECT * FROM todos');
        $query->execute();

        $result = $query->setFetchMode(PDO::FETCH_ASSOC);
        $results = $query->fetchAll();
        $_SESSION['result'] = $results;

        foreach($results as $result) {
            display_todo($result['id'], $result['todo']);
        }
    }
