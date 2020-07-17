<?php
/**
 * @file
 * Contains \Drupal\rateit\Plugin\Block\RateItBlock
 */
 namespace Drupal\rateit\Plugin\Block;
 
 use Drupal\Core\Block\BlockBase;
 use Drupal\Core\Session\AccountInterface;
 use Drupal\Core\Access\AccessResult;


 /**
 * Provides a Rateit Block
 *
 * @Block(
 *   id = "rateit_block",
 *   admin_label = @Translation("Rateit Block"),
 *   category = @Translation("Blocks")
 * )
 */
class RateitBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return \Drupal::formBuilder()->getForm('Drupal\rateit\Form\RateItForm');
    }
  
}

