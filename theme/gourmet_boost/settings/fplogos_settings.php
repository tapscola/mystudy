<?php 
	
	
	defined('MOODLE_INTERNAL') || die();
	
	/* Frontpage logos */
    $page = new admin_settingpage('theme_gourmet_boost_logos', get_string('logosheading', 'theme_gourmet_boost'));
	$page->add(new admin_setting_heading('theme_gourmet_boost_logos', get_string('logossub', 'theme_gourmet_boost'),
            format_text(get_string('logosdesc' , 'theme_gourmet_boost'), FORMAT_MARKDOWN)));
    
    // Enable logos Section
    $name = 'theme_gourmet_boost/uselogos';
    $title = get_string('uselogos', 'theme_gourmet_boost');
    $description = get_string('uselogosdesc', 'theme_gourmet_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    
    /* Logo 1 */
    
    // Description for logo One
    $name = 'theme_gourmet_boost/logo1info';
    $heading = get_string('logo1', 'theme_gourmet_boost');
    $information = get_string('logo1desc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    
    // Logo Image 
    $name = 'theme_gourmet_boost/logo1image';
    $title = get_string('logoimage', 'theme_gourmet_boost');
    $description = get_string('logoimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_gourmet_boost/logo1alttext';
    $title = get_string('logoalttext', 'theme_gourmet_boost');
    $description = get_string('logoalttextdesc', 'theme_gourmet_boost');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    

    // Logo URL
    $name = 'theme_gourmet_boost/logo1url';
    $title = get_string('logourl', 'theme_gourmet_boost');
    $description = get_string('logourldesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    
    /* Logo 2 */
    
    // Description for logo Two
    $name = 'theme_gourmet_boost/logo2info';
    $heading = get_string('logo2', 'theme_gourmet_boost');
    $information = get_string('logo2desc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Logo Image 
    $name = 'theme_gourmet_boost/logo2image';
    $title = get_string('logoimage', 'theme_gourmet_boost');
    $description = get_string('logoimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_gourmet_boost/logo2alttext';
    $title = get_string('logoalttext', 'theme_gourmet_boost');
    $description = get_string('logoalttextdesc', 'theme_gourmet_boost');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Logo URL
    $name = 'theme_gourmet_boost/logo2url';
    $title = get_string('logourl', 'theme_gourmet_boost');
    $description = get_string('logourldesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    /* Logo 3 */
    
    // Description for logo Three
    $name = 'theme_gourmet_boost/logo3info';
    $heading = get_string('logo3', 'theme_gourmet_boost');
    $information = get_string('logo3desc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Logo Image 
    $name = 'theme_gourmet_boost/logo3image';
    $title = get_string('logoimage', 'theme_gourmet_boost');
    $description = get_string('logoimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_gourmet_boost/logo3alttext';
    $title = get_string('logoalttext', 'theme_gourmet_boost');
    $description = get_string('logoalttextdesc', 'theme_gourmet_boost');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Logo URL
    $name = 'theme_gourmet_boost/logo3url';
    $title = get_string('logourl', 'theme_gourmet_boost');
    $description = get_string('logourldesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Logo 4 */
    
    // Description for logo Four
    $name = 'theme_gourmet_boost/logo4info';
    $heading = get_string('logo4', 'theme_gourmet_boost');
    $information = get_string('logo4desc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Logo Image 
    $name = 'theme_gourmet_boost/logo4image';
    $title = get_string('logoimage', 'theme_gourmet_boost');
    $description = get_string('logoimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_gourmet_boost/logo4alttext';
    $title = get_string('logoalttext', 'theme_gourmet_boost');
    $description = get_string('logoalttextdesc', 'theme_gourmet_boost');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Logo URL
    $name = 'theme_gourmet_boost/logo4url';
    $title = get_string('logourl', 'theme_gourmet_boost');
    $description = get_string('logourldesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Logo 5 */
    
    // Description for logo Five
    $name = 'theme_gourmet_boost/logo5info';
    $heading = get_string('logo5', 'theme_gourmet_boost');
    $information = get_string('logo5desc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Logo Image 
    $name = 'theme_gourmet_boost/logo5image';
    $title = get_string('logoimage', 'theme_gourmet_boost');
    $description = get_string('logoimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo5image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_gourmet_boost/logo5alttext';
    $title = get_string('logoalttext', 'theme_gourmet_boost');
    $description = get_string('logoalttextdesc', 'theme_gourmet_boost');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Logo URL
    $name = 'theme_gourmet_boost/logo5url';
    $title = get_string('logourl', 'theme_gourmet_boost');
    $description = get_string('logourldesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Logo 6 */
    
    // Description for logo Six
    $name = 'theme_gourmet_boost/logo6info';
    $heading = get_string('logo6', 'theme_gourmet_boost');
    $information = get_string('logo6desc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Logo Image 
    $name = 'theme_gourmet_boost/logo6image';
    $title = get_string('logoimage', 'theme_gourmet_boost');
    $description = get_string('logoimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo6image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_gourmet_boost/logo6alttext';
    $title = get_string('logoalttext', 'theme_gourmet_boost');
    $description = get_string('logoalttextdesc', 'theme_gourmet_boost');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Logo URL
    $name = 'theme_gourmet_boost/logo6url';
    $title = get_string('logourl', 'theme_gourmet_boost');
    $description = get_string('logourldesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
           
    $settings->add($page);
	
