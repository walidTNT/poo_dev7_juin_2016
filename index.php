<?php

  require_once 'base/UserManager.php';
  require_once 'base/UserEntity.php';

  // $user = UserEntity::create($_POST);
  $user = new UserEntity($_POST);

  $user->create = time();
  $user->update = time();

  $user->save();
