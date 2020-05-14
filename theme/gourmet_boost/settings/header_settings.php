<?php 
	
	
	defined('MOODLE_INTERNAL') || die();
	
	/* Header Settings */
    $page = new admin_settingpage('theme_gourmet_boost_header', get_string('headerheading', 'theme_gourmet_boost'));
	$page->add(new admin_setting_heading('theme_gourmet_boost_header', get_string('headerheadingsub', 'theme_gourmet_boost'),
            format_text(get_string('headerdesc' , 'theme_gourmet_boost'), FORMAT_MARKDOWN)));
    
    
    // Header phone number settings
    $name = 'theme_gourmet_boost/headerphone';
    $title = get_string('headerphone','theme_gourmet_boost');
    $description = get_string('headerphonedesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Header email settings
    $name = 'theme_gourmet_boost/headeremail';
    $title = get_string('headeremail','theme_gourmet_boost');
    $description = get_string('headeremaildesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Header widget setting
    $name = 'theme_gourmet_boost/headerwidget';
    $title = get_string('headerwidget','theme_gourmet_boost');
    $description = get_string('headerwidgetdesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting); 
        
    $settings->add($page);
	
