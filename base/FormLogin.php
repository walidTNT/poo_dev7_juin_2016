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

    $field_markup = NULL;
    $tag_open = NULL;
    $attributes = NULL;

    if ($field['field'] == 'input') {

      $tag_open = '<' . $field['field'] . ' type="' . $field['type'] . '" ';
      $tag_close = ' />';

    }
    elseif ($field['field'] == 'textarea') {

      $tag_open = '<' . $field['field'] . '>';
      $tag_close = '</' . $field['field'] . '>';

    }

    foreach ($field['attributes'] as $attribute => $value) {
      $attributes .= $attribute . '="' . $value . '" ';
    }

    $field_markup = $tag_open . ' name="' . $field['name'] . '" ' . $attributes . $tag_close;

    return $field_markup;
  }






} // end of FormLogin
?>
