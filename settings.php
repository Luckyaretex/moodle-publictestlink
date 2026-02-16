<?php
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    // Create a settings page for this plugin
    $settings = new admin_settingpage('local_publictestlink', get_string('pluginname', 'local_publictestlink'));

    // Setting to hide UI for non-authenticated users
    $settings->add(new admin_setting_configcheckbox(
        'local_publictestlink/hide_ui',
        get_string('hide_ui', 'local_publictestlink'),
        get_string('hide_ui_desc', 'local_publictestlink'),
        1
    ));

    $ADMIN->add('localplugins', $settings);
}
