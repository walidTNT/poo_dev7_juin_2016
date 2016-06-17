<?php

  require_once 'base/ContentEntityInterface.php';
  require_once 'base/Entity.php';
  require_once 'base/UserManager.php';
  require_once 'base/UserEntity.php';

  $_POST = [
    'name' => 'JP',
    'email' => 'jp@aston.fr',
    'pass' => 'p@$$w0rd',
    'localisation' => 'Paris',
    'age' => '25',
  ];

  $user = UserEntity::create($_POST)->save();
