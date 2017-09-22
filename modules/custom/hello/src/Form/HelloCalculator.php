<?php

namespace Drupal\hello\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;


/**
 * Implements a hello form.
 */
class HelloCalculator extends FormBase {

  /**
   * {@inheritdoc}.
   */
  public function getFormID(){
    return 'hello_form';
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Champ destiné à afficher le résultat du calcul.
    if (isset($form_state->getRebuildInfo()['result'])) {
      $form['result'] = array(
        '#markup' => '<h2>' . $this->t('Result: ') . $form_state->getRebuildInfo()['result'] . '</h2>',
      );
    }

    $form['value1'] = array(
      '#type'          => 'textfield',
      '#title'         => $this->t('First value'),
      '#description'   => $this->t('Enter first value.'),
      '#required'      => TRUE,
      '#default_value' => '2',
      
    );
    $form['submit'] = array(
      '#type'  => 'submit',
      '#value' => $this->t('Calculate'),
    );

    return $form;
  }

  /**
   * {@inheritdoc}.
   */
  public function submitForm(array &$form, FormStateInterface $form_state){
    return 'hello_form';
  }




}
