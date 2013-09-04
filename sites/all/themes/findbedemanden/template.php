<?php

/**
 * Implements template_preprocess_html().
 *
 */
//function findbedemanden_preprocess_html(&$variables) {
//  // Add conditional CSS for IE. To use uncomment below and add IE css file
//  drupal_add_css(path_to_theme() . '/css/ie.css', array('weight' => CSS_THEME, 'browsers' => array('!IE' => FALSE), 'preprocess' => FALSE));
//
//  // Need legacy support for IE downgrade to Foundation 2 or use JS file below
//  // drupal_add_js('http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js', 'external');
//}

/**
 * Implements template_preprocess_page
 *
 */
//function findbedemanden_preprocess_page(&$variables) {
//}

/**
 * Implements template_preprocess_node
 *
 */
//function findbedemanden_preprocess_node(&$variables) {
//}

/**
 * Implements hook_preprocess_block()
 */
//function findbedemanden_preprocess_block(&$variables) {
//  // Add wrapping div with global class to all block content sections.
//  $variables['content_attributes_array']['class'][] = 'block-content';
//
//  // Convenience variable for classes based on block ID
//  $block_id = $variables['block']->module . '-' . $variables['block']->delta;
//
//  // Add classes based on a specific block
//  switch ($block_id) {
//    // System Navigation block
//    case 'system-navigation':
//      // Custom class for entire block
//      $variables['classes_array'][] = 'system-nav';
//      // Custom class for block title
//      $variables['title_attributes_array']['class'][] = 'system-nav-title';
//      // Wrapping div with custom class for block content
//      $variables['content_attributes_array']['class'] = 'system-nav-content';
//      break;
//
//    // User Login block
//    case 'user-login':
//      // Hide title
//      $variables['title_attributes_array']['class'][] = 'element-invisible';
//      break;
//
//    // Example of adding Foundation classes
//    case 'block-foo': // Target the block ID
//      // Set grid column or mobile classes or anything else you want.
//      $variables['classes_array'][] = 'six columns';
//      break;
//  }
//
//  // Add template suggestions for blocks from specific modules.
//  switch($variables['elements']['#block']->module) {
//    case 'menu':
//      $variables['theme_hook_suggestions'][] = 'block__nav';
//    break;
//  }
//}

//function findbedemanden_preprocess_views_view(&$variables) {
//}

/**
 * Implements template_preprocess_panels_pane().
 *
 */
//function findbedemanden_preprocess_panels_pane(&$variables) {
//}

/**
 * Implements template_preprocess_views_views_fields().
 *
 */
//function findbedemanden_preprocess_views_view_fields(&$variables) {
//}

/**
 * Implements theme_form_element_label()
 * Use foundation tooltips
 */
function findbedemanden_form_element_label($variables) {
 /*if (!empty($variables['element']['#title'])) {
   $variables['element']['#title'] = '<span class="secondary label">' . $variables['element']['#title'] . '</span>';
 }
 if (!empty($variables['element']['#description'])) {
   $variables['element']['#description'] = ' <span data-tooltip="left" class="has-tip tip-left" data-width="250" title="' . $variables['element']['#description'] . '">' . t('More information?') . '</span>';
 }*/
 return theme_form_element_label($variables);
}

function findbedemanden_theme(){
  return array(
    'request_node_form' => array(
      'arguments' => array('form' => NULL),
      'template' => 'templates/request-node-form',
      'render element' => 'form'
    ),
  );
}
/**
 * Implements hook_preprocess_button().
 */
//function findbedemanden_preprocess_button(&$variables) {
//  $variables['element']['#attributes']['class'][] = 'button';
//  if (isset($variables['element']['#parents'][0]) && $variables['element']['#parents'][0] == 'submit') {
//    $variables['element']['#attributes']['class'][] = 'secondary';
//  }
//}

/**
 * Implements hook_form_alter()
 * Example of using foundation sexy buttons
 */
//function findbedemanden_form_alter(&$form, &$form_state, $form_id) {
//  // Sexy submit buttons
//  if (!empty($form['actions']) && !empty($form['actions']['submit'])) {
//    $form['actions']['submit']['#attributes'] = array('class' => array('primary', 'button', 'radius'));
//  }
//}

// Sexy preview buttons
//function findbedemanden_form_comment_form_alter(&$form, &$form_state) {
//  $form['actions']['preview']['#attributes']['class'][] = array('class' => array('secondary', 'button', 'radius'));
//}


/**
 * Implements template_preprocess_panels_pane().
 */
// function findbedemanden_preprocess_panels_pane(&$variables) {
// }

/**
* Implements template_preprocess_views_views_fields().
*/
/* Delete me to enable
function THEMENAME_preprocess_views_view_fields(&$variables) {
 if ($variables['view']->name == 'nodequeue_1') {

   // Check if we have both an image and a summary
   if (isset($variables['fields']['field_image'])) {

     // If a combined field has been created, unset it and just show image
     if (isset($variables['fields']['nothing'])) {
       unset($variables['fields']['nothing']);
     }

   } elseif (isset($variables['fields']['title'])) {
     unset ($variables['fields']['title']);
   }

   // Always unset the separate summary if set
   if (isset($variables['fields']['field_summary'])) {
     unset($variables['fields']['field_summary']);
   }
 }
}

// */

/**
 * Implements theme_links() targeting the main menu specifically.
 * Formats links for Top Bar http://foundation.zurb.com/docs/components/top-bar.html
 */
function findbedemanden_links__topbar_main_menu($variables) {
  // We need to fetch the links ourselves because we need the entire tree.
  $links = menu_tree_output(menu_tree_all_data(variable_get('menu_main_links_source', 'main-menu')));
  $output = _zurb_foundation_links($links);
  $variables['attributes']['class'][] = 'right';

  return '<ul' . drupal_attributes($variables['attributes']) . '>' . $output . '</ul>';
}

function findbedemanden_form_alter(&$form, &$form_state, $form_id) {
    switch ($form_id) {
        case 'request_node_form':
            if ($form['nid']['#value'] != '') {
                drupal_set_title("Edit ".$form['title']['#default_value']);
            } else {
                drupal_set_title("Udfyld formularen, så finder vi 3 tilbud til dig. Helt gratis og uforpligtende.");
            }
        break;
    }
}