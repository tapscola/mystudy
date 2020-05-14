<?php 
	
	
	defined('MOODLE_INTERNAL') || die();

            
    /* Header Alerts */
    $page = new admin_settingpage('theme_gourmet_boost_alerts', get_string('alertsheading', 'theme_gourmet_boost'));
	$page->add(new admin_setting_heading('theme_gourmet_boost_alerts', get_string('alertssub', 'theme_gourmet_boost'),
            format_text(get_string('alertsdesc' , 'theme_gourmet_boost'), FORMAT_MARKDOWN)));
    
    // Enable Alert 
    $name = 'theme_gourmet_boost/usealert';
    $title = get_string('usealert', 'theme_gourmet_boost');
    $description = get_string('usealertdesc', 'theme_gourmet_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    

    // Alert Content
    $name = 'theme_gourmet_boost/alertcontent';
    $title = get_string('alertcontent', 'theme_gourmet_boost');
    $description = get_string('alertcontentdesc', 'theme_gourmet_boost');
    $default = '<p><strong>Alert content goes here!</strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    // Alert background colour
    $name = 'theme_gourmet_boost/alertbgcolor';
    $title = get_string('alertbgcolor', 'theme_gourmet_boost');
    $description = get_string('alertbgcolordesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

            
    
    $settings->add($page);
	
