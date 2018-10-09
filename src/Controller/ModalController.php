<?php

/**
 * @file
 * Contains ModalController.
 */

namespace Drupal\custom_modal\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\OpenModalDialogCommand;

class ModalController extends ControllerBase {

	public function modal() {
		$options = [
      'dialogClass' => 'popup-dialog-class',
      'width' => '15%',
    ];
    $form = \Drupal::formBuilder()->getForm('Drupal\custom_modal\Form\RegistrationForm');
    $response = new AjaxResponse();
    //$form['#attached']['library'][] = 'core/drupal.dialog.ajax';
    //$response->setAttachments($form['#attached']);
    $response->addCommand(new OpenModalDialogCommand(t('Registration Form'), $form, $options));
    return $response;
	}
}