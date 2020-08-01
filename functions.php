<?php
/**
 * Functions
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

// THEME SUPPORT
// ==================================================.
require_once get_template_directory() . '/includes/theme-support.php';

// STYLES
// ==================================================.
require_once get_template_directory() . '/includes/styles.php';

// SCRIPTS
// ==================================================.
require_once get_template_directory() . '/includes/scripts.php';

// ADVANCED CUSTOM FIELDS
// ==================================================.
require_once get_template_directory() . '/includes/acf/options-pages.php';
require_once get_template_directory() . '/includes/acf/populate-dynamic-fields.php';
require_once get_template_directory() . '/includes/acf/fields/unique-id.php';
require_once get_template_directory() . '/includes/acf/admin-styles.php';

// POST TYPES
// ==================================================.
require_once get_template_directory() . '/includes/post-types/procedures.php';
require_once get_template_directory() . '/includes/post-types/staff.php';
require_once get_template_directory() . '/includes/post-types/dermatologists.php';
require_once get_template_directory() . '/includes/post-types/dermal.php';

// MENUS
// ==================================================.
require_once get_template_directory() . '/includes/menus/header-menu.php';
require_once get_template_directory() . '/includes/menus/footer-menu.php';
require_once get_template_directory() . '/includes/menus/top-side-menu.php';

// IMAGE SIZES
// ==================================================.
require_once get_template_directory() . '/includes/image-sizes.php';

// CUSTOM FUNCTIONS
// ==================================================.
require_once get_template_directory() . '/includes/custom-functions.php';

// FILTERS
// ==================================================.
require_once get_template_directory() . '/includes/filters.php';

// SIDEBARS
// ==================================================.
require_once get_template_directory() . '/includes/sidebars/blog.php';

// SHORTCODES
// ==================================================.
require_once get_template_directory() . '/includes/shortcodes/btn.php';
require_once get_template_directory() . '/includes/shortcodes/call-number.php';
require_once get_template_directory() . '/includes/shortcodes/reusable-block.php';
require_once get_template_directory() . '/includes/shortcodes/sidebar.php';
require_once get_template_directory() . '/includes/shortcodes/child-pages.php';
require_once get_template_directory() . '/includes/shortcodes/staff.php';
require_once get_template_directory() . '/includes/shortcodes/derm.php';
require_once get_template_directory() . '/includes/shortcodes/locations.php';
require_once get_template_directory() . '/includes/shortcodes/single_location.php';
require_once get_template_directory() . '/includes/shortcodes/dermal.php';

// PLUGINS
// ==================================================.
require_once get_template_directory() . '/includes/plugins.php';
