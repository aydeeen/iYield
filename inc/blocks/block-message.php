<?php
/**
 * Gutenberg Message Block
 *
 * @package FoundationPress
 */

namespace FoundationPress\Blocks;

class Block_Message extends Block {
	public static function get_name(): string {
		return 'message';
	}

	public static function register_block_type(): void {
		acf_register_block_type(
			[
				'name'            => self::get_name(),
				'title'           => __( 'Message', 'foundationpress' ),
				'render_template' => 'template-parts/blocks/message.php',
				'category'        => 'foundationpress',
				'icon'            => 'editor-paste-word',
				'keywords'        => [ 'message' ],
				'supports'        => [
					'align'  => false,
					'anchor' => true,
				],
			]
		);
	}
}

Block_Message::init();
