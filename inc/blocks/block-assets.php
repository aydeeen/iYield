<?php
/**
 * Gutenberg Assets Block
 *
 * @package FoundationPress
 */

namespace FoundationPress\Blocks;

class Block_Assets extends Block {
	public static function get_name(): string {
		return 'assets';
	}

	public static function register_block_type(): void {
		acf_register_block_type(
			[
				'name'            => self::get_name(),
				'title'           => __( 'Assets', 'foundationpress' ),
				'render_template' => 'template-parts/blocks/assets.php',
				'category'        => 'foundationpress',
				'icon'            => 'performance',
				'keywords'        => [ 'assets' ],
				'supports'        => [
					'align'  => false,
					'anchor' => true,
				],
			]
		);
	}
}

Block_Assets::init();
