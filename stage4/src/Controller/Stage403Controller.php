<?php
/**
 * @file
 * Contains \Drupal\stage4\Controller\Stage403Controller.
 */

namespace Drupal\stage4\Controller;

use Drupal\Core\Controller\ControllerBase;

class Stage403Controller extends ControllerBase { 
	/**
	* Display the markup.
	*
	* @return array
	*/
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Error 403! Forbidden.'), 
    );
  }
}