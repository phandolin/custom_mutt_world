<?php

namespace Drupal\custom_mutt_world\Form;

use Drupal\node\NodeForm;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element;
use Drupal\Core\Routing\RouteMatchInterface;

class MuttForm extends NodeForm {

  /**
  * {@inheritdoc}
  */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);
    $form_object = $form_state->getFormObject();

    //only continue for our node type
    if ($this->entity->bundle() != 'mutts') {
      return $form;
    }

    return $form;
  }

  /**
  * {@inheritdoc}
  */
  public function save(array $form, FormStateInterface $form_state) {
    return parent::save($form, $form_state);
  }

}
