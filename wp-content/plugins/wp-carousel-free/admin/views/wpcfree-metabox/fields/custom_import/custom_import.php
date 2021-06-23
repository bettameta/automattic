<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.
/**
 *
 * Field: Custom_import
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! class_exists( 'SP_WPCF_Field_custom_import' ) ) {
	class SP_WPCF_Field_custom_import extends SP_WPCF_Fields {

		public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
			parent::__construct( $field, $value, $unique, $where, $parent );
		}
		public function render() {
			echo $this->field_before();
			$wpcp_shortcodelink = admin_url( 'edit.php?post_type=sp_wp_carousel' );
				echo '<p><input type="file" id="import" accept=".json"></p>';
				echo '<p><button type="button" class="import">Import</button></p>';
				echo '<a id="wpcp_shortcode_link_redirect" href="' . $wpcp_shortcodelink . '"></a>';
			echo $this->field_after();
		}
	}
}
