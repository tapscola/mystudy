<?php 
	
	
	defined('MOODLE_INTERNAL') || die();
	
	/* Frontpage CTA Section */
    
    $page = new admin_settingpage('theme_gourmet_boost_ctasection', get_string('ctasectionheading', 'theme_gourmet_boost'));
	$page->add(new admin_setting_heading('theme_gourmet_boost_ctasection', get_string('ctasectionsub', 'theme_gourmet_boost'),
            format_text(get_string('ctasectiondesc' , 'theme_gourmet_boost'), FORMAT_MARKDOWN)));
    
    // Enable CTA Section
    $name = 'theme_gourmet_boost/usectasection';
    $title = get_string('usectasection', 'theme_gourmet_boost');
    $description = get_string('usectasectiondesc', 'theme_gourmet_boost');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // CTA Section Title
    $name = 'theme_gourmet_boost/ctasectiontitle';
    $title = get_string('ctasectiontitle', 'theme_gourmet_boost');
    $description = get_string('ctasectiontitledesc', 'theme_gourmet_boost');
    $default = 'Why Choose Us';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // CTA Section Content
    $name = 'theme_gourmet_boost/ctasectioncontent';
    $title = get_string('ctasectioncontent', 'theme_gourmet_boost');
    $description = get_string('ctasectioncontentdesc', 'theme_gourmet_boost');
    $default = '<p>Gourmet Boost is a responsive Moodle theme designed specifically for schools, colleges, universities and online educational establishments who want to offer a clean and professional user experience for their users.</p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // CTA Section CTA Button Text
    $name = 'theme_gourmet_boost/ctasectionbuttontext';
    $title = get_string('ctasectionbuttontext', 'theme_gourmet_boost');
    $description = get_string('ctasectionbuttontextdesc', 'theme_gourmet_boost');
    $default = 'Join Now';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // CTA Section CTA Button URL
    $name = 'theme_gourmet_boost/ctasectionbuttonurl';
    $title = get_string('ctasectionbuttonurl', 'theme_gourmet_boost');
    $description = get_string('ctasectionbuttonurldesc', 'theme_gourmet_boost');
    $default = '#link';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // URL open in new window    
    $name = 'theme_gourmet_boost/ctasectionbuttonurlopennew';
    $title = get_string('opennew', 'theme_gourmet_boost');
    $description = get_string('opennewdesc', 'theme_gourmet_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

        
    $settings->add($page);
	
