<?php


/**
 * class Entity
 *
 */
abstract class Entity implements ContentEntityInterface
{


  /**
   *
   * @access public
   */
  public $create;

  /**
   *
   * @access public
   */
  public $update;

  /**
   * Permet d'hydrate des objets d'entités.
   *
   * @return  $entity Object
   *          Object of Entity instance.
   * @access private
   */
  private function hydrate($data, $entity) {

    foreach ($data as $property => $value) {
      if (property_exists($entity, $property)) {
        $entity->$property = $value;
      }
    }

    return $entity;
  }

  /**
   *
   *
   * @return void
   * @access public
   */
  public static function create($data) {

    $entity = get_called_class();

    return self::hydrate($data, new $entity);
  } // end of member function create

  /**
   *
   *
   * @return void
   * @access public
   */
  public function delete() {
  } // end of member function delete

  /**
   * La méthode save permet de sauvegarder les informations de l'utilisateur
   * en base de donnée.
   *
   * @access public
   */
  public function save() {

    $db = new PDO('mysql:host=localhost;dbname=aston', 'root', 'paris');
    $entity_class = get_class($this);   //  => UserEntity
    $class = str_replace('Entity', 'Manager', $entity_class);   //  => UserManager
    $manager = new $class($db);   //  => new UserManager($db)
    $manager->flush($this);

    return $this;
  } // end of member function save

  /**
   *
   *
   * @return void
   * @access public
   */
  public function load() {
  } // end of member function load



























} // end of Entity
