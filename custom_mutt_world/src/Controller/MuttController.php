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
    // $account = \Drupal::currentUser();
    // if(!$account->hasPermission('access mutts')) {
    //   return [
    //     '#markup' => t('You are no authorized to view this page')
    //   ];
    // }
    //
    // return [
    //   '#type' => 'markup',
    //   '#markup' => $this->t('Let me hear it for the mutts in the back!')
    // ];

  $suggestion_view = views_embed_view('mutts', 'mutts');

  $build['#suggestions'] = [
    'view' => $suggestion_view
  ];

  $build['#theme'] = 'custom_mutt_world';
  // $build['#attached']['library'][] = 'afc_crm/crm';
  return $build;
}

}
