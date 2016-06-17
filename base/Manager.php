<?php

abstract class Manager
{

  private $_db;  //$db = new PDO('mysql:host=localhost;dbname=aston', 'root', 'paris');

  public function __construct($db) {
      $this->_db = $db;
    }
  
  public function getClass($entity)
  {
    $class = get_class();
    $entity = ($class)$entity;
    return $entity;
  }
  
  public function getQuery($name, $email, $localisation)
  {
    $query = $this->_db->prepare('
                                  INSERT
                                  INTO user ($name, $email, $localisation)
                                  VALUES (:$name, :$email, :$localisation )'
                                  );
    return $query;
  } //return count arg[] ??
  
  public function bindQuery($entity)
  {
    $entity = getClass($entity);
    // ??? param 
    $name = $entity->name;
    $email = idem;
    $localisation = idem;
    
    $query = getQuery($name, $email, $localisation);
    
    $nbr_param = 3; // ??? count  or param in list ?
    
    for( $i =0; $i < $nbr_param; $i++)
    {
      $query->bindParam(':nbr_param[0]', $entity->name);
    }
    $query->execute();
  }
  
  public function flush($entity) 
  {
    $entity = getClass($entity);
    
    if ($entity->id) {  return;  }

    else {
      bindQuery($entity);
    }
  }
}
