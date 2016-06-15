<?php

  require_once 'base/Form.php';
  require_once 'base/FormRegister.php';

  $registerForm = new FormRegister();
  $form = $registerForm->render();
  print $form;
