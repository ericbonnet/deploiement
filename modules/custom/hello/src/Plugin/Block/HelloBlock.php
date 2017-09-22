<?php

namespace Drupal\hello\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Hello block")
 * )
 */
class HelloBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
  	$date = \Drupal::service('date.formatter')->format(time(), 'custom', 'H\hi s\s');
    return array(
    	'#markup' => $this->t('Bienvenue sur notre site. Il est '.$date),
    	'#cache'=> array(
    		'keys' => ['hello_block'],
    		'max-age' => '10'
    	)
    );
  }

}

