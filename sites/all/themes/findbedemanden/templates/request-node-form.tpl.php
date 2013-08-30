<?php
dpm($form);
$form['field_ceremony']['#attributes']['class'][] = 'large-6';
$form['field_method']['#attributes']['class'][] = 'large-6';
$form['field_name']['#attributes']['class'][] = 'large-6';
$form['field_post_nr']['#attributes'] = array('class' => array('large-2'));
$form['field_city']['#attributes'] = array('class' => array('large-3', 'large-offset-1'));
$form['field_email']['#attributes']['class'][] = 'large-6';
$form['field_telephone']['#attributes']['class'][] = 'large-6';

// Hide labels for the contact info
$form['field_name']['und']['0']['value']['#title'] = '';
$form['field_post_nr']['und']['0']['value']['#title'] = '';
$form['field_city']['und']['0']['value']['#title'] = '';
$form['field_email']['und']['0']['value']['#title'] = '';
$form['field_telephone']['und']['0']['value']['#title'] = '';

$form['actions']['submit']['#attributes'] = array('class'=> array( 'large-6'));
$form['actions']['submit']['#value'] = t('Modtag dine gratis tilbud');

print drupal_render_children($form);