<?php
//dpm($form);
$form['field_ceremony']['#attributes'] = array('class' => array('large-8', 'large-offset-2'));
$form['field_method']['#attributes'] = array('class' => array('large-8', 'large-offset-2'));
$form['field_name']['#attributes'] = array('class' => array('large-8', 'large-offset-2'));
$form['field_lawyer']['#attributes'] = array('class' => array('large-8', 'large-offset-2'));
$form['field_wishes']['#attributes'] = array('class' => array('large-8', 'large-offset-2'));
$form['field_extras']['#attributes'] = array('class' => array('large-8', 'large-offset-2'));
$form['field_post_nr']['#attributes'] = array('class' => array('large-2', 'large-offset-2'));
$form['field_city']['#attributes'] = array('class' => array('large-5', 'large-offset-1'));
$form['field_email']['#attributes'] = array('class' => array('large-8', 'large-offset-2'));
$form['field_telephone']['#attributes'] = array('class' => array('large-8', 'large-offset-2'));

// Hide labels for the contact info
/*$form['field_name']['und']['0']['value']['#title'] = '';
$form['field_post_nr']['und']['0']['value']['#title'] = '';
$form['field_city']['und']['0']['value']['#title'] = '';
$form['field_email']['und']['0']['value']['#title'] = '';
$form['field_telephone']['und']['0']['value']['#title'] = '';*/

$form['actions']['submit']['#attributes'] = array('class' => array('large-8', 'large-offset-2', 'cta-button'));
$form['actions']['submit']['#value'] = t('Modtag dine gratis tilbud');

print drupal_render_children($form);