<?php

  require_once 'base/UserManager.php';
  require_once 'base/UserEntity.php';

  $_POST = [
    'name' => 'JP',
    'email' => 'jp@aston.fr',
    'pass' => 'p@$$w0rd',
    'localisation' => 'Paris',
    'age' => '25',
  ];

  // $user = UserEntity::create($_POST);
  // $user = new UserEntity($_POST);
  $user = new UserEntity();

  $user->name = $_POST['name'];
  $user->email = $_POST['email'];
  $user->pass = $_POST['pass'];
  $user->localisation = $_POST['localisation'];
  $user->age = $_POST['age'];

  $user->create = time();
  $user->update = time();

  print '<pre>';
  print_r($user);
  print '</pre>';


  $user->save();
