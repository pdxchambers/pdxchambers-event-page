<?php
/**
 * Settings to control the background and page text.
 */
function pdxc_init_admin(){
    //Initiealizes the admin page itself from the dashboard.
    add_menu_page(
        _('PDXChambers Event Page','pdxchambers-event-page'),
        _('PDXChambers Event Page','pdxchambers-event-page'),
        'author',
        'pdxchambers-event-page',
        'pdxc_admin_content',
        'dashicons-media-document',
        23
    );
}

function pdxc_init_admin_content(){
    //creates a settings section on the custom admin page.
    add_settings_section(
        'pdxc-event-content',
        'Event Page Content Settings',
        'pdxc_init_content_settings',
        'pdxchambers-event-page'
    );
}

function pdxc_init_settings_fields(){
    add_settings_field(
        'pdxc-content-settings',
        'Custom Content',
        'pdxc_settings_markup',
        'pdxchambers-event-page',
        'pdxc-event-content',
    );
}

add_action('admin_menu', 'pdxc_init_admin');
add_action('admin_init', 'pdxc_init_admin_content');
add_action('admin_init', 'pdxc_init_settings_fields');

function pdxc_admin_content(){
?>
    <h1><?php esc_html_e('PDXChambers Event Page', 'pdxchambers-event-page'); ?></h1>
    <form method="POST" action="options.php">
        <?php
            settings_fields( 'pdxchambers-event-page' );
            do_settings_sections( 'pdxchambers-event-page' );
            submit_button();
        ?>
    </form>
<?php
}

function pdxc_init_content_settings(){
    echo 'This section customizes the content of the event page.';
}

function pdxc_settings_markup(){
    ?>
    <label for="background_image"><?php _e('Background Image', 'pdxchambers-event-page'); ?></label>
    <input type="text" id="imgBackground" name="background_image">
    <?php
}
?>