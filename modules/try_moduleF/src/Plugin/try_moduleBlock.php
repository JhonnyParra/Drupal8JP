<?php
namespace Drupal\try_moduleF\Plugin\Block;

use Drupal\Core\Block\BlockBase;

Class try_moduleBlock extends BlockBase{

  public function build(){
    return [
      '#type' => 'markup',
      '#markup' => 'hola mundo en bloque :V'
    ];
  }
}
