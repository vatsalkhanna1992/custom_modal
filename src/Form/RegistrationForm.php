<?php

/**
 * @file
 * Contains RegistrationForm.
 */

namespace Drupal\custom_modal\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class RegistrationForm extends FormBase {

	/**
	 * (@inheritdoc)
	 */
	public function getFormId() {
		return 'registration_form';
	}

	/**
	 * (@inheritdoc)
	 */
	public function buildForm(array $form, FormStateInterface $form_state) {
		$form['first_name'] = [
			'#type' => 'textfield',
			'#title' => t('First Name'),
			'#description' => t("Enter your first Name"),
			'#required' => TRUE,
			'#size' => '25',
		];
		$form['last_name'] = [
			'#type' => 'textfield',
			'#title' => t('Last Name'),
			'#description' => t("Enter your last Name"),
			'#required' => TRUE,
			'#size' => '25',
		];
		$form['age'] = [
			'#type' => 'textfield',
			'#title' => t('Age'),
			'#description' => t("Enter your age"),
			'#required' => TRUE,
			'#size' => '25',
		];
		$form['email_address'] = [
			'#type' => 'textfield',
			'#title' => t('Email Address'),
			'#description' => t("Enter your email address"),
			'#required' => TRUE,
			'#size' => '25',
		];
		$form['phone'] = [
			'#type' => 'textfield',
			'#title' => t('Contact Number'),
			'#description' => t("Enter your contact number"),
			'#required' => TRUE,
			'#size' => '25',
		];
		$form['submit'] = [
			'#type' => 'submit',
			'#value' => t('Register'),
		];
		return $form;
	}

	/**
	 * (@inheritdoc)
	 */
	public function validateForm(array &$form, FormStateInterface $form_state) {
	}

	/**
	 * (@inheritdoc)
	 */
	public function submitForm(array &$form, FormStateInterface $form_state) {
	}
}