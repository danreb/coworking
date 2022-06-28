<?php

namespace Drupal\coworking\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Coworking Demonstration routes.
 */
class CoworkingLoginController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {
    $login_form = $this->formBuilder();
    return $login_form->getForm("Drupal\user\Form\UserLoginForm");
  }

}
