<?php
/**
 * MagpieRSS: a simple RSS integration tool
 *
 * A compiled file for RSS syndication
 *
 * @author Kellan Elliott-McCrea <kellan@protest.net>
 * @version 0.51
 * @license GPL
 *
 * @package External
 * @subpackage MagpieRSS
 */


/**
 * Fires before MagpieRSS is loaded, to optionally replace it.
 *
 * @since 2.3.0
 * @deprecated 3.0.0
 */
do_action( 'load_feed_engine' );

/** RSS feed constant. */
define('RSS', 'RSS');
define('ATOM', 'Atom');
define('MAGPIE_USER_AGENT', 'WordPress/' . $GLOBALS['wp_version']);









