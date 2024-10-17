<?php
/**
 * Gutenberg Testimonials Block
 *
 * @package FoundationPress
 */

namespace FoundationPress\Blocks;

class Block_Testimonials extends Block {
	public static function get_name(): string {
		return 'testimonials';
	}

	public static function register_block_type(): void {
		acf_register_block_type(
			[
				'name'            => self::get_name(),
				'title'           => __( 'Testimonials', 'foundationpress' ),
				'render_template' => 'template-parts/blocks/testimonials.php',
				'category'        => 'foundationpress',
				'icon'            => 'album',
				'keywords'        => [ 'testimonials' ],
				'supports'        => [
					'align'  => false,
					'anchor' => true,
				],
			]
		);
	}
}

Block_Testimonials::init();
