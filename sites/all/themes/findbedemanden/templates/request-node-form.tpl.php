<?php
//dpm($form);
$form['field_ceremony']['#attributes']['class'][] = 'large-6';
$form['field_method']['#attributes']['class'][] = 'large-6';
$form['field_name']['#attributes']['class'][] = 'large-6';
$form['field_post_nr']['#attributes'] = array('class' => array('large-2'));
$form['field_city']['#attributes'] = array('class' => array('large-3', 'large-offset-1'));
$form['field_email']['#attributes']['class'][] = 'large-6';
$form['field_telephone']['#attributes']['class'][] = 'large-6';

$form['actions']['submit']['#attributes'] = array('class'=> array( 'large-6'));

print drupal_render_children($form);