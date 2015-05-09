<?php

    $config = array(
      'host'	=> 'localhost',
      'username'	=> 'Kate',  //Fill in your username, password and database name.
      'password'	=> 'katertot',
      'dbname'          => 'db505127031'
    );

    $db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
