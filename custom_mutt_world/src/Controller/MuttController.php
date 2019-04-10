<?php

namespace Drupal\custom_mutt_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class MuttController.
 */
class MuttController extends ControllerBase {

  /**
   * Mutt.
   *
   * @return string
   *   Return Hello string.
   */
  public function mutt() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: mutt')
    ];
  }

}
