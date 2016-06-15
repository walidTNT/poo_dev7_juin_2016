<?php

  require_once 'base/FormLogin.php';

  $loginForm = new FormLogin();
  $form = $loginForm->render();
  print $form;
