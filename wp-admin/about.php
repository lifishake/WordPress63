<?php
/**
 * About This Version administration panel.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** WordPress Administration Bootstrap */
require_once __DIR__ . '/admin.php';

// Used in the HTML title tag.
/* translators: Page title of the About WordPress page in the admin. */
$title = 'About';

$display_version = get_bloginfo( 'version', 'display' );
$parts = explode('-', $display_version);
$fix_day = array_pop($parts);

require_once ABSPATH . 'wp-admin/admin-header.php';
?>
	<div class="wrap about__container">

		<div class="about__header">
			<div class="about__header-title">
				<h1>
					<?php
					printf(
						/* translators: %s: Version number. */
						'WordPress %s',
						$display_version
					);
					?>
				</h1>
			</div>
		</div>

		<div class="about__section">
			<div class="column">
				<h2>
					<?php
					printf(
						/* translators: %s: Version number. */
						'最后修改日期 %s',
						$fix_day
					);
					?>
				</h2>
				<p class="is-subheading">
					<?php echo('WordPress 6.8 delta版 ，旨在删除没用功能。'); ?>
				</p>
			</div>
		</div>

		<hr class="is-large" />

		<div class="return-to-dashboard">
			<?php
			printf(
				'<a href="%1$s">%2$s</a>',
				esc_url( self_admin_url() ),
				'Go to Dashboard'
			);
			?>
		</div>
	</div>

<?php require_once ABSPATH . 'wp-admin/admin-footer.php'; ?>

