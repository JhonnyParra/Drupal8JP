<?php

namespace Drupal\try_moduleF\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\UrlHelper;


Class classDePruebaForm extends FormBase{

  public function getFormId(){
    return 'class_de_prueba_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state){
    $form = array();

    $form['first'] = array(
      '#type' => 'textfield',
      '#description' => 'hola',
      '#default_value' => 'default',
    );

    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state){
    if($form_state->getValue('first') < 1){
      $form_state->setErrorByName('first', $this->('cantidad erronea'));
    }
  }

  public function submitForm(array &$form, FormStateInterface $form_state){
    drupal_set_message($form_state->getValue('first'));
  }

}
