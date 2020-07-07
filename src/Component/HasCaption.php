<?php
/**
 * Interface HasCaption
 *
 * @package AmpProject\AmpWP
 */

namespace AmpProject\AmpWP\Component;

use DOMNode;

/**
 * Interface HasCaption
 *
 * @internal
 * @since 1.5.0
 */
interface HasCaption {

	/**
	 * Gets the caption node.
	 *
	 * @return DOMNode
	 */
	public function get_caption_node();
}
