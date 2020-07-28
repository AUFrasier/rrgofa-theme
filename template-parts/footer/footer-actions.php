<?php
/**
 * Template part for displaying the footer action items (call to actions, contact info, etc)
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>


<div class="footer-actions-wrapper">
	<div class="footer-action">
		<a href="/contact-us">
			<div id="footer-btn">
				<span>
					<?php if(is_page('financing')) { ?>
						<span class="button-text body-font">Learn more about our financing program!</span>
					<?php } else { ?>
						<span class="button-text body-font">Schedule an Inspection!</span>
					<?php } ?>
				</span>
			</div>
		</a>
	</div>
</div><!-- .footer-actions-wrapper -->
