<?php

    $config = array(
      'host'	=> 'localhost',
      'username'	=> 'slum',  //Fill in your username, password and database name.
      'password'	=> 'slum',
      'dbname'          => 'silver_lake'
    );

    $db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
