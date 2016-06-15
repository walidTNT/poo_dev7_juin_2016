<?php


/**
 * class FormLogin
 *
 */
class FormLogin
{

  /** Aggregations: */

  /** Compositions: */

   /*** Attributes: ***/

  /**
   *
   * @access public
   */
  public $email = [
    'field' => 'input',
    'type' => 'email',
    'name' => 'email',
    'attributes' => [
      'placeholder' => 'Votre e-mail',
    ],
  ];

  /**
   *
   * @access public
   */
  public $pass = [
    'field' => 'input',
    'type' => 'password',
    'name' => 'pass',
    'attributes' => [
      'placeholder' => 'Votre pass',
    ],
  ];

  public function render() {

    $form_markup = '<form method="post">';
    $form_markup .= $this->generateField($this->email);
    $form_markup .= $this->generateField($this->pass);
    $form_markup .= '</form>';

    return $form_markup;
  }

  private function generateField($field) {

    $field_markup = '<' . $field['field']
     . ' type="' . $field['type']
     . '" name="' . $field['name'] . '" />';

    return $field_markup;
  }






} // end of FormLogin
?>
