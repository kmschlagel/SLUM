<?php

    $config = array(
      'host'	=> 'localhost',
      'username'	=> 'root',  //Fill in your username, password and database name.
      'password'	=> '',
      'dbname'          => 'db505127031'
    );

    $db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
