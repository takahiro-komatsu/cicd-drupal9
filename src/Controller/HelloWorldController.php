<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for hello world message.
 */
class HelloWorldController extends ControllerBase {

  /**
   * Hello World.
   *
   * @return array
   *   A markup text.
   */
  public function helloWorld() {
    return [
      '#markup' => $this->t('Hello, World!'),
    ];
  }

}
