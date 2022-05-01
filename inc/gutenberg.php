<?php

function ui_gutenberg_block_categories($categories, $post)
{
  $ui_gutenberg_categories = [
    [
      'slug' => 'ui-gutenberg',
      'title' => __('UI Blocks'),
    ],
  ];

  return array_merge($ui_gutenberg_categories, $categories);
}

add_filter('block_categories_all', 'ui_gutenberg_block_categories', 10, 2);

function ui_gutenberg_acf_init()
{
  // Bail out if function doesn’t exist.
  if (!function_exists('acf_register_block')) {
    return;
  }

  include_once __DIR__ . '/blocks/text_and_image.php';
  include_once __DIR__ . '/blocks/hero_image.php';

}

add_action('acf/init', 'ui_gutenberg_acf_init');
