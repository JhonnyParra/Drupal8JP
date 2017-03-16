<?php

namespace Drupal\try_moduleF\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal;

Class try_ModuleFController extends ControllerBase{

  public function pagina_1(){
    return array(
      '#type' => 'markup',
      '#markup' => $this->('hola'),
    );
  }

  public function insertarFormulario(){
    $form = $this->formBuilder()->getForm('Drupal\try_moduleF\Form\classDePruebaForm');

    return [
      '#theme' => 'pagina-1',
      '#titulo' => $this->('mi form'),
      '#description' => 'hola',
      '#formulario' => $form
    ]
  }

}
