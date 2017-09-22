<?php

namespace Drupal\hello\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Session' Block.
 *
 * @Block(
 *   id = "session_block",
 *   admin_label = @Translation("Session active")
 * )
 */
class SessionBlock extends BlockBase {

  public function build() {
    $connection = \Drupal::database();
    $result = $connection->select('sessions', 's')
    ->countQuery()
    ->execute()
    ->fetchField();

    return array(
    	'#markup' => $this->t('Il y a actuellement '.$result.' sessions actives'),
      '#cache' => array('keys' => ['hello:sessions'], 'max-age' => '1'),
    );
  }

}

