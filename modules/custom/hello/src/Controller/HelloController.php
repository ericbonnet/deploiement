<?php

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {

	public function content($param) {
		$message = $this->t("Vous êtes sur la page Hello. Votre nom d'utilisateur est %username! URL parameter is %param.", array(
			"%username" => $this->currentUser()->getAccountName(),
			"%param" => $param,

		));

		$build = array(
			'#markup' => $message
		);
		return $build;
	}
}