<?php
/**
 * Gutenberg About Block
 *
 * @package FoundationPress
 */

namespace FoundationPress\Blocks;

class Block_About extends Block {
	public static function get_name(): string {
		return 'about';
	}

	public static function register_block_type(): void {
		acf_register_block_type(
			[
				'name'            => self::get_name(),
				'title'           => __( 'About', 'foundationpress' ),
				'render_template' => 'template-parts/blocks/about.php',
				'category'        => 'foundationpress',
				'icon'            => 'heart',
				'keywords'        => [ 'about' ],
				'supports'        => [
					'align'  => false,
					'anchor' => true,
				],
			]
		);
	}
}

Block_About::init();
