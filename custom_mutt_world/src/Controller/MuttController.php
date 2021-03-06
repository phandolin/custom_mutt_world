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
    if($account->hasPermission('access mutts')) {

        $mutts_view = views_embed_view('mutts', 'block_1');
        // $build['#mutts'] = [
        //   'view' => $mutts_view
        // ];
        // $build['#theme'] = 'custom_mutt_world';
        // ksm($build);

        return $mutts_view;


    } else {
    return [
        '#markup' => $this->t('You are not authorized to view these hairy mutts')
    ];
    }
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Let me hear it for the mutts in the back!')
    ];
  }
}
