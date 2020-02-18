<?php

class Basemapper_Widget extends WP_Widget {

	// Main constructor
	public function __construct() {
		parent::__construct(
		'basemapper_widget',
		__( 'Basemapper Store Locator', 'text_domain' ),
		array(
			'customize_selective_refresh' => true,
		)
	);
	}

	// The widget form (for the backend )
	public function form( $instance ) {
		$options = get_option('basemapper');

	// Set widget defaults
	$defaults = array(
		'map_id'    => $options['map_id'],
	);
	
	// Parse current settings with defaults
	extract( wp_parse_args( ( array ) $instance, $defaults ) ); ?>

	<?php // Map ID ?>
	<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'map_id' ) ); ?>"><?php _e( 'Map ID', 'text_domain' ); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'map_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'map_id' ) ); ?>" type="text" value="<?php echo esc_attr( $map_id ); ?>" />
	</p>

<?php }

	// Update widget settings
	public function update( $new_instance, $old_instance ) {
	$instance = $old_instance;
	$instance['map_id']    = isset( $new_instance['map_id'] ) ? wp_strip_all_tags( $new_instance['map_id'] ) : '';
	return $instance;
	}

	// Display the widget
	public function widget( $args, $instance ) {

		extract( $args );

		// Check the widget options
		$map_id    = isset( $instance['map_id'] ) ? $instance['map_id'] : '';

		// WordPress core before_widget hook (always include )
		echo $before_widget;

		// Display the widget
		echo '<div class="widget-text wp_widget_plugin_box">';

			// Display widget title if defined
			if ( $map_id ) {
				echo '<div data-basemapper-map-id="' . $map_id . '"></div>';
			}

		echo '</div>';

		// WordPress core after_widget hook (always include )
		echo $after_widget;

	}

}
function register_basemapper_widget() {
	register_widget( 'Basemapper_Widget' );
}
add_action( 'widgets_init', 'register_basemapper_widget' );