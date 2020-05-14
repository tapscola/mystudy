<?php 
	
	
	defined('MOODLE_INTERNAL') || die();
	
	
	/* Advanced Settings */
	$page = new admin_settingpage('theme_gourmet_boost_advanced', get_string('advancedheading', 'theme_gourmet_boost'));

	
	/* Custom SCSS & CSS */
	$page->add(new admin_setting_heading('theme_gourmet_boost_customcss', get_string('customcssheadingsub', 'theme_gourmet_boost'),
            format_text(get_string('customcssdesc' , 'theme_gourmet_boost'), FORMAT_MARKDOWN)));
       
    // Raw SCSS to include before the content.
    $setting = new admin_setting_scsscode('theme_gourmet_boost/scsspre',
        get_string('rawscsspre', 'theme_gourmet_boost'), get_string('rawscsspre_desc', 'theme_gourmet_boost'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Raw SCSS to include after the content.
    $setting = new admin_setting_scsscode('theme_gourmet_boost/scss', get_string('rawscss', 'theme_gourmet_boost'),
        get_string('rawscss_desc', 'theme_gourmet_boost'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    /* Analytics Settings */
	$page->add(new admin_setting_heading('theme_gourmet_boost_analytics', get_string('analyticsheadingsub', 'theme_gourmet_boost'),
            format_text(get_string('analyticsdesc' , 'theme_gourmet_boost'), FORMAT_MARKDOWN)));
    
    
    // Google Analytics ID
    $name = 'theme_gourmet_boost/analyticsid';
    $title = get_string('analyticsid', 'theme_gourmet_boost');
    $description = get_string('analyticsiddesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    /* iOS Homescreen Icons */
            
    //Description for iOS Icons
    $name = 'theme_gourmet_boost/iosiconinfo';
    $heading = get_string('iosicon', 'theme_gourmet_boost');
    $information = get_string('iosicondesc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // iPhone Icon.
    $name = 'theme_gourmet_boost/iphoneicon';
    $title = get_string('iphoneicon', 'theme_gourmet_boost');
    $description = get_string('iphoneicondesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'iphoneicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // iPhone Retina Icon.
    $name = 'theme_gourmet_boost/iphoneretinaicon';
    $title = get_string('iphoneretinaicon', 'theme_gourmet_boost');
    $description = get_string('iphoneretinaicondesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'iphoneretinaicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // iPad Icon.
    $name = 'theme_gourmet_boost/ipadicon';
    $title = get_string('ipadicon', 'theme_gourmet_boost');
    $description = get_string('ipadicondesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'ipadicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // iPad Retina Icon.
    $name = 'theme_gourmet_boost/ipadretinaicon';
    $title = get_string('ipadretinaicon', 'theme_gourmet_boost');
    $description = get_string('ipadretinaicondesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'ipadretinaicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    
    
    $settings->add($page);