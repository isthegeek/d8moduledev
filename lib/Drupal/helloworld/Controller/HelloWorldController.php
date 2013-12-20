<?php

/**
* @file
* Contains \Drupal\helloworld\Controller\HelloWorldController.
*/

namespace Drupal\helloworld\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
* Controller routines for hello module routes.
*/
class HelloWorldController extends ControllerBase {
 

/**
* Return the 'Hello World' page.
*
* @return string
*   A render array containing our 'Hello World' page content.
*/
  public function display_text() {
    $output = array();
    $output['hello'] = array(
      '#markup' => 'Hello World!',
    );
    return $output;
  }
}

