<?php
/**
 * Settings to control the background and page text.
 */
function pdxc_init_admin(){
    //Initiealizes the admin page itself from the dashboard.
    add_menu_page(
        _('PDXChambers Event Page','pdxchambers-event-page'),
        _('PDXChambers Event Page','pdxchambers-event-page'),
        'manage_options',
        'pdxchambers-event-page',
        'pdxc_admin_content',
        'dashicons-media-document',
        23
    );
}

function pdxc_init_admin_content(){
    //creates a settings section on the custom admin page.
    add_settings_section(
        'pdxc-event-page-styles',
        'Event Title Page Styles',
        'pdxc_init_style_settings',
        'pdxchambers-event-page'
    );
    add_settings_section(
        'pdxc-event-content',
        'Event Title Group Settings',
        'pdxc_init_content_settings',
        'pdxchambers-event-page'
    );
    add_settings_section(
        'pdxc-event-details',
        'Event Detail Settings',
        'pdxc_init_detail_settings',
        'pdxchambers-event-page'
    );
}

function pdxc_init_settings_fields(){
    add_settings_field(
        /*Uploader for background image.*/
        'pdxc-background-settings',
        'Background Image',
        'pdxc_fileupload_markup',
        'pdxchambers-event-page',
        'pdxc-event-page-styles'
    );
    register_setting('pdxchambers-event-page', 'pdxc-background-settings');

    /*These fields define the event title and subtext in the same region
      of the event page.*/
    add_settings_field(
        'pdxc-event-title-settings',
        'Event Title',
        'pdxc_event_title_markup',
        'pdxchambers-event-page',
        'pdxc-event-content'
    );
    register_setting('pdxchambers-event-page', 'pdxc-event-title-settings');

    add_settings_field(
        'pdxc-title-subtext1-settings',
        'Title Subtext 1',
        'pdxc_title_subtext1_markup',
        'pdxchambers-event-page',
        'pdxc-event-content'
    );
    register_setting('pdxchambers-event-page', 'pdxc-title-subtext1-settings');

    add_settings_field(
        'pdxc-title-subtext2-settings',
        'Title Subtext 2',
        'pdxc_title_subtext2_markup',
        'pdxchambers-event-page',
        'pdxc-event-content'
    );
    register_setting('pdxchambers-event-page', 'pdxc-title-subtext2-settings');

    add_settings_field(
        'pdxc-title-subtext3-settings',
        'Title Subtext 3',
        'pdxc_title_subtext3_markup',
        'pdxchambers-event-page',
        'pdxc-event-content'
    );
    register_setting('pdxchambers-event-page', 'pdxc-title-subtext3-settings');

    add_settings_field(
        'pdxc-title-subtext4-settings',
        'Title Subtext 4',
        'pdxc_title_subtext4_markup',
        'pdxchambers-event-page',
        'pdxc-event-content'
    );
    register_setting('pdxchambers-event-page', 'pdxc-title-subtext4-settings');

    /*These fields define the event details. They can be customized to whatever, but
      were added under the "Who, What, When, Where, and Why" model,
    */
    add_settings_field(
        'pdxc-detail-title1-settings',
        'Detail Title 1',
        'pdxc_detail_title1_markup',
        'pdxchambers-event-page',
        'pdxc-event-details'
    );
    register_setting('pdxchambers-event-page', 'pdxc-detail-title1-settings');

    add_settings_field(
        'pdxc-detail-content1-settings',
        'Detail Content 1',
        'pdxc_detail_content1_markup',
        'pdxchambers-event-page',
        'pdxc-event-details'
    );
    register_setting('pdxchambers-event-page', 'pdxc-detail-content1-settings');

    add_settings_field(
        'pdxc-detail-title2-settings',
        'Detail Title 2',
        'pdxc_detail_title2_markup',
        'pdxchambers-event-page',
        'pdxc-event-details'
    );
    register_setting('pdxchambers-event-page', 'pdxc-detail-title2-settings');

    add_settings_field(
        'pdxc-detail-content2-settings',
        'Detail Content 2',
        'pdxc_detail_content2_markup',
        'pdxchambers-event-page',
        'pdxc-event-details'
    );
    register_setting('pdxchambers-event-page', 'pdxc-detail-content2-settings');

    add_settings_field(
        'pdxc-detail-title3-settings',
        'Detail Title 3',
        'pdxc_detail_title3_markup',
        'pdxchambers-event-page',
        'pdxc-event-details'
    );
    register_setting('pdxchambers-event-page', 'pdxc-detail-title3-settings');

    add_settings_field(
        'pdxc-detail-content3-settings',
        'Detail Content 3',
        'pdxc_detail_content3_markup',
        'pdxchambers-event-page',
        'pdxc-event-details'
    );
    register_setting('pdxchambers-event-page', 'pdxc-detail-content3-settings');

    add_settings_field(
        'pdxc-detail-title4-settings',
        'Detail Title 4',
        'pdxc_detail_title4_markup',
        'pdxchambers-event-page',
        'pdxc-event-details'
    );
    register_setting('pdxchambers-event-page', 'pdxc-detail-title4-settings');

    add_settings_field(
        'pdxc-detail-content4-settings',
        'Detail Content 4',
        'pdxc_detail_content4_markup',
        'pdxchambers-event-page',
        'pdxc-event-details'
    );
    register_setting('pdxchambers-event-page', 'pdxc-detail-content4-settings');

    add_settings_field(
        'pdxc-detail-title5-settings',
        'Detail Title 5',
        'pdxc_detail_title5_markup',
        'pdxchambers-event-page',
        'pdxc-event-details'
    );
    register_setting('pdxchambers-event-page', 'pdxc-detail-title5-settings');

    add_settings_field(
        'pdxc-detail-5-settings',
        'Detail Content 5',
        'pdxc_detail_content5_markup',
        'pdxchambers-event-page',
        'pdxc-event-details'
    );
    register_setting('pdxchambers-event-page', 'pdxc-detail-content5-settings');
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

function pdxc_init_style_settings(){
    echo 'This section sets the visual elements of the page.';
}

function pdxc_init_content_settings(){
    echo 'This section customizes the content of the event page.';
}

function pdxc_init_detail_settings(){
    echo 'Fields in this section are displayed in the details section on the event page.';
}

function pdxc_fileupload_markup(){
    ?>
    <input type="file" id="imgBackground" name="background_image" multiple="false">
    <input type="hidden" id="post_id" name="post_id" value="0">
    <?php
    wp_nonce_field('background_image', 'background_image_nonce');
    if(
        isset( $_POST['background_image_nonce'], $_POST['post_id'])
        && wp_verify_nonce($_POST['background_image_nonce'], 'background_image' )
        && current_user_can('edit_post', $_POST['post_id'])
    ) {
        require_once( ABSPATH . 'wp-admin/includes/image.php');
        require_once( ABSPATH . 'wp-admin/includes/file.php');
        require_once( ABSPATH . 'wp-admin/includes/media.php');
        $attachment_id = media_handle_upload( 'background_image', $_POST['post_id']);

        if ( is_wp_error( $attachment_id ) ) {
            echo 'There was an error uploading the image.';
        } else {
            echo 'Success!';
        }
    } else {
        echo 'Security check failed, verify you have permission to edit this page and try again.';
    }
}

function pdxc_event_title_markup(){
    ?>
        <input type="text" id="eventTitle" name="event_title" value="<?php echo get_option( '' ); ?>">
    <?php
}

function pdxc_title_subtext1_markup(){
    ?>
        <input type="text" id="eventSubtext1" name="event_subtext1" value="<?php echo get_option( '' ); ?>">
    <?php
}

function pdxc_title_subtext2_markup(){
    ?>
        <input type="text" id="eventSubtext2" name="event_subtext2" value="<?php echo get_option( '' ); ?>">
    <?php
}

function pdxc_title_subtext3_markup(){
    ?>
        <input type="text" id="eventSubtext3" name="event_subtext3" value="<?php echo get_option( '' ); ?>">
    <?php
}

function pdxc_title_subtext4_markup(){
    ?>
        <input type="text" id="eventSubtext4" name="event_subtext4" value="<?php echo get_option( '' ); ?>">
    <?php
}
function pdxc_detail_title1_markup(){
    ?>
        <input type="text" id="detail-title1" name="detail_title1" value="<?php echo get_option( '' ); ?>">
    <?php
    }

function pdxc_detail_content1_markup(){
?>
    <textarea id="detail1" name="detail1" rows="4" cols = "25"><?php echo get_option( '' ); ?></textarea>
<?php
}

function pdxc_detail_title2_markup(){
    ?>
        <input type="text" id="detail-title2" name="detail_title2" value="<?php echo get_option( '' ); ?>">
    <?php
    }

function pdxc_detail_content2_markup(){
?>
    <textarea id="detail2" name="detail2" rows="4" cols = "25"><?php echo get_option( '' ); ?></textarea>
<?php
}

function pdxc_detail_title3_markup(){
    ?>
        <input type="text" id="detail-title3" name="detail_title3" value="<?php echo get_option( '' ); ?>">
    <?php
    }

function pdxc_detail_content3_markup(){
?>
    <textarea id="detail3" name="detail3" rows="4" cols = "25"><?php echo get_option( '' ); ?></textarea>
<?php
}

function pdxc_detail_title4_markup(){
    ?>
        <input type="text" id="detail-title4" name="detail_title4" value="<?php echo get_option( '' ); ?>">
    <?php
    }

function pdxc_detail_content4_markup(){
?>
    <textarea id="detail4" name="detail4" rows="4" cols = "25"><?php echo get_option( '' ); ?></textarea>
<?php
}

function pdxc_detail_title5_markup(){
    ?>
        <input type="text" id="detail-title5" name="detail_title5" value="<?php echo get_option( '' ); ?>">
    <?php
    }

function pdxc_detail_content5_markup(){
?>
    <textarea id="detail5" name="detail5" rows="4" cols = "25"><?php echo get_option( '' ); ?></textarea>
<?php
}
?>