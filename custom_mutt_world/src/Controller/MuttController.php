<?php

namespace Drupal\custom_mutt_world\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;
use Drupal\node\Entity\Node;

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
    $account = \Drupal::currentUser();
    if(!$account->hasPermission('access mutts')) {
      return [
        '#markup' => $this->t('You are no authorized to view this page')
      ];
    }
    if(!$account->hasPermission('access mutts')) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Let me hear it for the mutts in the back!')
    ];
  }

  $mutts_view = views_embed_view('mutts', 'mutts');

  $build['#mutts'] = [
    'view' => $mutts_view
  ];

  $build['#theme'] = 'custom_mutt_world';
  // $build['#attached']['library'][] = 'afc_crm/crm';
  return $build;
}

}
