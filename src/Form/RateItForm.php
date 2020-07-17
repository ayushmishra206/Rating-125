<?php
/**
 * @file
 * Contains \Drupal\rateit\Form\RateItForm
 */
namespace Drupal\rateit\Form;

use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;

class RateItForm extends Formbase {
    public function getFormId() {
        return 'rateit_form';
      }

    public function buildForm(array $form, FormStateInterface $form_state){
                
        $form['name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Name'),
            '#required' => TRUE,
          ];

          $form['rating'] = array(
            '#type' => 'radios',
            '#title' => t('Rating'),
            '#description' => t('Select a Rating.'),
            '#required' => TRUE,
            '#options' => array(
            '1'=>t('1'),
            '2'=>t('2'),
            '3'=>t('3'),
            '4'=>t('4'),
            '5'=>t('5')),
          );
              
          $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Submit'),
          ];
      
          return $form;
    }    


    public function submitForm(array &$form, FormStateInterface $form_state) {
      db_insert('rateit')
      ->fields(array(
        'name' => $form_state->getValue('name'),
        'rating' => $form_state->getValue('rating'),
       ))
      ->execute();
    drupal_set_message(t('Thank you for your rating'));
    }
}

