<?php
/**
 * @file
 * Contains \Drupal\stage4\Controller\Stage404Controller.
 */

namespace Drupal\stage4\Controller;

use Drupal\Core\Controller\ControllerBase;

class Stage404Controller extends ControllerBase { 
	/**
	* Display the markup.
	*
	* @return array
	*/
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Error 404! Page not found.'), 
    );
  }
}