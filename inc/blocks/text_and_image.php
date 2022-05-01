<?php

/**
 *  This is the callback that displays the block.
 *
 * @param   array  $block      The block settings and attributes.
 * @param   string $content    The block content (emtpy string).
 * @param   bool   $is_preview True during AJAX preview.
 */
function ui_text_and_image_block_render_callback( $block, $content = '', $is_preview = false ) {
  $context = Timber::get_context();

  // Store block values.
  $context['block'] = $block;
  // Store field values.
  $context['fields'] = get_fields();

  // Store $is_preview value.
  $context['is_preview'] = $is_preview;
  // Render the block.
  Timber::render( 'blocks/text-and-image.twig', $context );
}

// Register a new block.
acf_register_block( array(
  'name'            => 'ui-gutenberg/text-and-image-block',
  'title'           => __( 'Text and Image Block', 'ui' ),
  'render_callback' => 'ui_text_and_image_block_render_callback',
  'category'        => 'ui-gutenberg',
  'icon'            => 'universal-access-alt',
	'keywords'        => array( 'text', 'image', 'cta' ),
	'mode'						=> 'edit',
  'supports'        => array(
		'align' => false,
		'customClassName' => false,
  ),
) );
