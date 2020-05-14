<?php 
	
	
	defined('MOODLE_INTERNAL') || die();
	
	/* Footer Social Media Settings */
	$page = new admin_settingpage('theme_gourmet_boost_social', get_string('socialheading', 'theme_gourmet_boost'));
	$page->add(new admin_setting_heading('theme_gourmet_boost_socialmediaheadingsub', get_string('socialmediaheadingsub', 'theme_gourmet_boost'),
            format_text(get_string('socialmediaheadingsubdesc' , 'theme_gourmet_boost'), FORMAT_MARKDOWN)));
            
     // Enable social media 
    $name = 'theme_gourmet_boost/useheadersocial';
    $title = get_string('useheadersocial', 'theme_gourmet_boost');
    $description = get_string('useheadersocialdesc', 'theme_gourmet_boost');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    
    //Website url settings
    $name = 'theme_gourmet_boost/website';
    $title = get_string('website', 'theme_gourmet_boost');
    $description = get_string('websitedesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
            
    // Twitter url setting.
    $name = 'theme_gourmet_boost/twitter';
    $title = get_string('twitter', 'theme_gourmet_boost');
    $description = get_string('twitterdesc', 'theme_gourmet_boost');
    $default = '#twitter-link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Facebook url setting.
    $name = 'theme_gourmet_boost/facebook';
    $title = get_string('facebook', 'theme_gourmet_boost');
    $description = get_string('facebookdesc', 'theme_gourmet_boost');
    $default = '#facebook-link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Google+ url setting.
    $name = 'theme_gourmet_boost/googleplus';
    $title = get_string('googleplus', 'theme_gourmet_boost');
    $description = get_string('googleplusdesc', 'theme_gourmet_boost');
    $default = '#google-link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // LinkedIn url setting.
    $name = 'theme_gourmet_boost/linkedin';
    $title = get_string('linkedin', 'theme_gourmet_boost');
    $description = get_string('linkedindesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // YouTube url setting.
    $name = 'theme_gourmet_boost/youtube';
    $title = get_string('youtube', 'theme_gourmet_boost');
    $description = get_string('youtubedesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Vimeo url setting.
    $name = 'theme_gourmet_boost/vimeo';
    $title = get_string('vimeo', 'theme_gourmet_boost');
    $description = get_string('vimeodesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    
    // Instagram url setting.
    $name = 'theme_gourmet_boost/instagram';
    $title = get_string('instagram', 'theme_gourmet_boost');
    $description = get_string('instagramdesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    // Pinterest url setting.
    $name = 'theme_gourmet_boost/pinterest';
    $title = get_string('pinterest', 'theme_gourmet_boost');
    $description = get_string('pinterestdesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    // Flickr url setting.
    $name = 'theme_gourmet_boost/flickr';
    $title = get_string('flickr', 'theme_gourmet_boost');
    $description = get_string('flickrdesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    //Tumblr url setting.
    $name = 'theme_gourmet_boost/tumblr';
    $title = get_string('tumblr', 'theme_gourmet_boost');
    $description = get_string('tumblrdesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    //Slideshare url setting.
    $name = 'theme_gourmet_boost/slideshare';
    $title = get_string('slideshare', 'theme_gourmet_boost');
    $description = get_string('slidesharedesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Skype account setting.
    $name = 'theme_gourmet_boost/skype';
    $title = get_string('skype', 'theme_gourmet_boost');
    $description = get_string('skypedesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    

    // Weibo account setting.
    $name = 'theme_gourmet_boost/weibo';
    $title = get_string('weibo', 'theme_gourmet_boost');
    $description = get_string('weibodesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // RSS url setting.
    $name = 'theme_gourmet_boost/rss';
    $title = get_string('rss', 'theme_gourmet_boost');
    $description = get_string('rssdesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
	
	
	/* Custom Social Media Links */
	$page->add(new admin_setting_heading('theme_gourmet_boost_customsocial', get_string('customsocialheadingsub', 'theme_gourmet_boost'),
            format_text(get_string('customsocialdesc' , 'theme_gourmet_boost'), FORMAT_MARKDOWN)));
	
	// Custom social url setting 1.
	$name = 'theme_gourmet_boost/social1';
	$title = get_string('sociallink', 'theme_gourmet_boost');
	$description = get_string('sociallinkdesc', 'theme_gourmet_boost');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);
	
	// Social icon setting 1.
	$name = 'theme_gourmet_boost/socialicon1';
	$title = get_string('sociallinkicon', 'theme_gourmet_boost');
	$description = get_string('sociallinkicondesc', 'theme_gourmet_boost');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$page->add($setting);

	
	// Custom social url setting 2.
	$name = 'theme_gourmet_boost/social2';
	$title = get_string('sociallink', 'theme_gourmet_boost');
	$description = get_string('sociallinkdesc', 'theme_gourmet_boost');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);
	
	// Social icon setting 2.
	$name = 'theme_gourmet_boost/socialicon2';
	$title = get_string('sociallinkicon', 'theme_gourmet_boost');
	$description = get_string('sociallinkicondesc', 'theme_gourmet_boost');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$page->add($setting);
	
	// Custom social url setting 3.
	$name = 'theme_gourmet_boost/social3';
	$title = get_string('sociallink', 'theme_gourmet_boost');
	$description = get_string('sociallinkdesc', 'theme_gourmet_boost');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);
	
	// Social icon setting 3.
	$name = 'theme_gourmet_boost/socialicon3';
	$title = get_string('sociallinkicon', 'theme_gourmet_boost');
	$description = get_string('sociallinkicondesc', 'theme_gourmet_boost');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$page->add($setting);

	
	
	
	// Add the page
    $settings->add($page);	
