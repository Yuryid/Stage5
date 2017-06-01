<?php
/**
 * @file
 * Contains Stage4 block.
 */
namespace Drupal\stage4\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a 'Some text' Block.
 *
 * @Block(
 *   id = "stage4_block",
 *   admin_label = @Translation("Stage 4 Block"),
 * )
 */
class Stage4Block extends BlockBase {

	/**
   * {@inheritdoc}
   */
  public function build() {
    if (\Drupal::currentUser()->hasPermission('stage 4 block access')) {
      return array(
        '#markup' => $this->t('Access is granted.'),
      );
    }
    else {
      return array(
        '#markup' => $this->t('Access to view this content is denied.'),
      );
    }
  }

  //**
   /* {@inheritdoc}
   /*/
   // protected function blockAccess(AccountInterface $account) {\Drupal::currentUser()->hasPermission('name of permission');
   //   return AccessResult::allowedIfHasPermission($account, 'stage 4 block access');
   // }
  //  }

}