<?php

namespace Drupal\coworking\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Coworking Demonstration routes.
 */
class CoworkingController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
