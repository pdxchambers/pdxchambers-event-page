<?php
 /**
  * PDXChambers Event Page
  *
  * @author            Julien Chambers
  * @copyright         2021 Julien Chambers
  * @license           GPL-3.0-or-later
  *
  * Plugin Name:       PDXChambers Event Page
  * Plugin URI:        https://pdxchambers.com/pdxchambers-event-page/
  * Description:       This plugin creates a custom page for advertising an event.
  * Version:           1.0.0
  * Requires at least: 5.6
  * Requires PHP:      7.2
  * Author:            Julien Chambers
  * Author URI:        https://www.pdxchambers.com
  * License:           GPL v3 or later
  * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
  * Text Domain:       pdxchambers-event-page
  *
  *	PDXChambers Event Page is free software: you can redistribute it and/or modify
  *	it under the terms of the GNU General Public License as published by
  *	the Free Software Foundation, either version 2 of the License, or
  *	any later version.
  *	
  *	PDXChambers Event Page is distributed in the hope that it will be useful,
  *	but WITHOUT ANY WARRANTY; without even the implied warranty of
  *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
  *	GNU General Public License for more details.
  *	
  *	You should have received a copy of the GNU General Public License
  *	along with PDXChambers Event Page. If not, see https://www.gnu.org/licenses/gpl-3.0.html.
 */
include_once 'admin/settings.php';
include_once 'interface/page-ui.php';

/*Hooks and Functions Required by WordPress*/
register_activation_hook(__FILE__, 'pdxc_activate_event_page');
register_deactivation_hook(__FILE__, 'pdxc_deactivate_event_page');
register_uninstall_hook(__FILE__, 'pdxc_uninstall_event_page');

function pdxc_activate_event_page(){
    add_shortcode(
        "pdxchambers-event-page",
        'pdxc_display_ui'
    );
}
function pdxc_deactivate_event_page(){}
function pdxc_uninstall_event_page(){}

/*
    Enqueue scripts and styles
    Must properly add scripts and styles to prevent overriding existing ones.
*/


 ?>