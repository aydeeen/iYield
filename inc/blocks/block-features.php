<?php
/**
 * Gutenberg Features Block
 *
 * @package FoundationPress
 */

namespace FoundationPress\Blocks;

class Block_Features extends Block {
	public static function get_name(): string {
		return 'features';
	}

	public static function register_block_type(): void {
		acf_register_block_type(
			[
				'name'            => self::get_name(),
				'title'           => __( 'Features', 'foundationpress' ),
				'render_template' => 'template-parts/blocks/features.php',
				'category'        => 'foundationpress',
				'icon'            => 'screenoptions',
				'keywords'        => [ 'features' ],
				'supports'        => [
					'align'  => false,
					'anchor' => true,
				],
			]
		);
	}
}

Block_Features::init();
