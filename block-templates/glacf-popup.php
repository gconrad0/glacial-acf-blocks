<?php
/**
 *
 * Popup Block Template
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param int|string $post_id The post ID this block is saved to.
 *
 * @package WordPress
 * @subpackage glacial
 * Author: Glacial Multimedia, Inc.
 * Author URL: https://www.glacial.com/
 */
?>
<div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
	<div class="modal__overlay" tabindex="-1" data-micromodal-close>
		<div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
			<header class="modal__header">
				<h2 class="modal__title" id="modal-1-title">
					Micromodal
				</h2>
				<button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
			</header>
			<main class="modal__content" id="modal-1-content">
				<p>
					Try hitting the <code>tab</code> key and notice how the focus stays within the modal itself. Also, <code>esc</code> to close modal.
				</p>
			</main>
			<footer class="modal__footer">
				<button class="modal__btn modal__btn-primary">Continue</button>
				<button class="modal__btn" data-micromodal-close aria-label="Close this dialog window">Close</button>
			</footer>
		</div>
	</div>
</div>
