<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://boldmapper.com
 * @since      1.0.0
 *
 * @package    Boldmapper
 * @subpackage Boldmapper/admin/partials
 */
?>

<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="boldmapper_options" action="options.php">
		<?php
        //Grab all options
        $options = get_option($this->plugin_name);

        // Boldmapper options
        $map_id = $options['map_id'];
    ?>

    <?php
        settings_fields($this->plugin_name);
        do_settings_sections($this->plugin_name);
    ?>
    <!-- load jQuery from CDN -->

    <fieldset>
        <p>Enter your boldmapper map ID from <a href="https://boldmapper.com/dashboard">the dashboard</a>.</p>
        <legend class="screen-reader-text"><span><?php _e('Enter your Map ID', $this->plugin_name); ?></span></legend>
        <input type="text" class="regular-text" id="<?php echo $this->plugin_name; ?>-map_id" name="<?php echo $this->plugin_name; ?>[map_id]" value="<?php echo $map_id ?>"/>
    </fieldset>

    <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

    </form>

</div>