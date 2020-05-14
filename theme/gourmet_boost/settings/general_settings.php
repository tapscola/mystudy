<?php 
	
	
	defined('MOODLE_INTERNAL') || die();
	
	
	/* General Settings */
	$page = new admin_settingpage('theme_gourmet_boost_general', get_string('generalheading', 'theme_gourmet_boost'));
	
	/* Subtitle */
	$page->add(new admin_setting_heading('theme_gourmet_boost_general', get_string('generalheadingsub', 'theme_gourmet_boost'),
            format_text(get_string('generalheadingdesc' , 'theme_gourmet_boost'), FORMAT_MARKDOWN)));
	
    // Logo file setting.   
    $name = 'theme_gourmet_boost/logo';
    $title = get_string('logo','theme_gourmet_boost');
    $description = get_string('logodesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);   

    
    // Theme Color Switcher (Preset SCSS)

    $name = 'theme_gourmet_boost/preset';
    $title = get_string('preset', 'theme_gourmet_boost');
    $description = get_string('preset_desc', 'theme_gourmet_boost');
    $default = 'theme-1.scss';

    $context = context_system::instance();
    $fs = get_file_storage();
    $files = $fs->get_area_files($context->id, 'theme_gourmet_boost', 'preset', 0, 'itemid, filepath, filename', false);

    $choices = [];
    foreach ($files as $file) {
        $choices[$file->get_filename()] = $file->get_filename();
    }
    // These are the built in presets.
    $choices['theme-1.scss'] = 'theme-1.scss';
    $choices['theme-2.scss'] = 'theme-2.scss';
    $choices['theme-3.scss'] = 'theme-3.scss';
    $choices['theme-4.scss'] = 'theme-4.scss';

    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Variable $theme-color-primary
    // We use an empty default value because the default colour should come from the preset.
    $name = 'theme_gourmet_boost/brandcolorprimary';
    $title = get_string('brandcolorprimary', 'theme_gourmet_boost');
    $description = get_string('brandcolorprimarydesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Copyright setting.
    $name = 'theme_gourmet_boost/copyright';
    $title = get_string('copyright', 'theme_gourmet_boost');
    $description = get_string('copyrightdesc', 'theme_gourmet_boost');
    $default = 'Copyright @ 3rd Wave Media';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting); 
    
    $settings->add($page);
