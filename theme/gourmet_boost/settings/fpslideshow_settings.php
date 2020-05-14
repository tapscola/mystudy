<?php 
	
	
	defined('MOODLE_INTERNAL') || die();
	
    /* Frontpage Hero Slideshow Settings */
    $page = new admin_settingpage('theme_gourmet_boost_slideshow', get_string('slideshowheading', 'theme_gourmet_boost'));
    $page->add(new admin_setting_heading('theme_gourmet_boost_slideshow', get_string('slideshowheadingsub', 'theme_gourmet_boost'),
            format_text(get_string('slideshowdesc' , 'theme_gourmet_boost'), FORMAT_MARKDOWN)));
    
    // Enable Hero Slideshow    
    $name = 'theme_gourmet_boost/useheroslideshow';
    $title = get_string('useheroslideshow', 'theme_gourmet_boost');
    $description = get_string('useheroslideshowdesc', 'theme_gourmet_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);



    /* Slide 1 */

    // Description for Slide 1
    $name = 'theme_gourmet_boost/slide1info';
    $heading = get_string('slide1', 'theme_gourmet_boost');
    $information = get_string('slideinfodesc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Image
    $name = 'theme_gourmet_boost/slide1image';
    $title = get_string('slideimage', 'theme_gourmet_boost');
    $description = get_string('slideimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide1image');
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $page->add($setting);

    // Title.
    $name = 'theme_gourmet_boost/slide1';
    $title = get_string('slidetitle', 'theme_gourmet_boost');
    $description = get_string('slidetitledesc', 'theme_gourmet_boost');
    $default = 'Slide One Headline';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    // Caption.
    $name = 'theme_gourmet_boost/slide1caption';
    $title = get_string('slidecaption', 'theme_gourmet_boost');
    $description = get_string('slidecaptiondesc', 'theme_gourmet_boost');
    $default = 'Slide 1 description goes here. You can add up to 6 slides.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

   

    // CTA URL.
    $name = 'theme_gourmet_boost/slide1url';
    $title = get_string('slideurl', 'theme_gourmet_boost');
    $description = get_string('slideurldesc', 'theme_gourmet_boost');
    $default = '#link1';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // CTA URL open in new window    
    $name = 'theme_gourmet_boost/slide1urlopennew';
    $title = get_string('opennew', 'theme_gourmet_boost');
    $description = get_string('opennewdesc', 'theme_gourmet_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    /* Slide 2 */
    
    // Description for Slide 2
    $name = 'theme_gourmet_boost/slide2info';
    $heading = get_string('slide2', 'theme_gourmet_boost');
    $information = get_string('slideinfodesc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Image
    $name = 'theme_gourmet_boost/slide2image';
    $title = get_string('slideimage', 'theme_gourmet_boost');
    $description = get_string('slideimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide2image');
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $page->add($setting);

    // Title.
    $name = 'theme_gourmet_boost/slide2';
    $title = get_string('slidetitle', 'theme_gourmet_boost');
    $description = get_string('slidetitledesc', 'theme_gourmet_boost');
    $default = 'Slide Two Headline';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    // Caption.
    $name = 'theme_gourmet_boost/slide2caption';
    $title = get_string('slidecaption', 'theme_gourmet_boost');
    $description = get_string('slidecaptiondesc', 'theme_gourmet_boost');
    $default = 'Slide 2 description goes here. You can add up to 6 slides.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    // CTA URL.
    $name = 'theme_gourmet_boost/slide2url';
    $title = get_string('slideurl', 'theme_gourmet_boost');
    $description = get_string('slideurldesc', 'theme_gourmet_boost');
    $default = '#link2';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // CTA URL open in new window    
    $name = 'theme_gourmet_boost/slide2urlopennew';
    $title = get_string('opennew', 'theme_gourmet_boost');
    $description = get_string('opennewdesc', 'theme_gourmet_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
   

    
    /* Slide 3 */
    
    // Description for Slide 3
    $name = 'theme_gourmet_boost/slide3info';
    $heading = get_string('slide3', 'theme_gourmet_boost');
    $information = get_string('slideinfodesc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Image
    $name = 'theme_gourmet_boost/slide3image';
    $title = get_string('slideimage', 'theme_gourmet_boost');
    $description = get_string('slideimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide3image');
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $page->add($setting);

    // Title.
    $name = 'theme_gourmet_boost/slide3';
    $title = get_string('slidetitle', 'theme_gourmet_boost');
    $description = get_string('slidetitledesc', 'theme_gourmet_boost');
    $default = 'Slide Three Headline';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    // Caption.
    $name = 'theme_gourmet_boost/slide3caption';
    $title = get_string('slidecaption', 'theme_gourmet_boost');
    $description = get_string('slidecaptiondesc', 'theme_gourmet_boost');
    $default = 'Slide 3 description goes here. You can add up to 6 slides.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    // CTA URL.
    $name = 'theme_gourmet_boost/slide3url';
    $title = get_string('slideurl', 'theme_gourmet_boost');
    $description = get_string('slideurldesc', 'theme_gourmet_boost');
    $default = '#link3';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // CTA URL open in new window    
    $name = 'theme_gourmet_boost/slide3urlopennew';
    $title = get_string('opennew', 'theme_gourmet_boost');
    $description = get_string('opennewdesc', 'theme_gourmet_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    /* Slide 4 */
    
    // Description for Slide 4
    $name = 'theme_gourmet_boost/slide4info';
    $heading = get_string('slide4', 'theme_gourmet_boost');
    $information = get_string('slideinfodesc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Image
    $name = 'theme_gourmet_boost/slide4image';
    $title = get_string('slideimage', 'theme_gourmet_boost');
    $description = get_string('slideimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide4image');
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $page->add($setting);

    // Title.
    $name = 'theme_gourmet_boost/slide4';
    $title = get_string('slidetitle', 'theme_gourmet_boost');
    $description = get_string('slidetitledesc', 'theme_gourmet_boost');
    $default = 'Slide Four Headline';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    // Caption.
    $name = 'theme_gourmet_boost/slide4caption';
    $title = get_string('slidecaption', 'theme_gourmet_boost');
    $description = get_string('slidecaptiondesc', 'theme_gourmet_boost');
    $default = 'Slide 4 description goes here. You can add up to 6 slides.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    // CTA URL.
    $name = 'theme_gourmet_boost/slide4url';
    $title = get_string('slideurl', 'theme_gourmet_boost');
    $description = get_string('slideurldesc', 'theme_gourmet_boost');
    $default = '#link4';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // CTA URL open in new window    
    $name = 'theme_gourmet_boost/slide4urlopennew';
    $title = get_string('opennew', 'theme_gourmet_boost');
    $description = get_string('opennewdesc', 'theme_gourmet_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    /* Slide 5 */
    
    // Description for Slide 5
    $name = 'theme_gourmet_boost/slide5info';
    $heading = get_string('slide5', 'theme_gourmet_boost');
    $information = get_string('slideinfodesc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Image
    $name = 'theme_gourmet_boost/slide5image';
    $title = get_string('slideimage', 'theme_gourmet_boost');
    $description = get_string('slideimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide5image');
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $page->add($setting);

    // Title.
    $name = 'theme_gourmet_boost/slide5';
    $title = get_string('slidetitle', 'theme_gourmet_boost');
    $description = get_string('slidetitledesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    // Caption.
    $name = 'theme_gourmet_boost/slide5caption';
    $title = get_string('slidecaption', 'theme_gourmet_boost');
    $description = get_string('slidecaptiondesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // CTA URL.
    $name = 'theme_gourmet_boost/slide5url';
    $title = get_string('slideurl', 'theme_gourmet_boost');
    $description = get_string('slideurldesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // CTA URL open in new window    
    $name = 'theme_gourmet_boost/slide5urlopennew';
    $title = get_string('opennew', 'theme_gourmet_boost');
    $description = get_string('opennewdesc', 'theme_gourmet_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    
     /* Slide 6 */
    // Description for Slide 6
    $name = 'theme_gourmet_boost/slide6info';
    $heading = get_string('slide6', 'theme_gourmet_boost');
    $information = get_string('slideinfodesc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Image
    $name = 'theme_gourmet_boost/slide6image';
    $title = get_string('slideimage', 'theme_gourmet_boost');
    $description = get_string('slideimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide6image');
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $page->add($setting);

    // Title.
    $name = 'theme_gourmet_boost/slide6';
    $title = get_string('slidetitle', 'theme_gourmet_boost');
    $description = get_string('slidetitledesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    // Caption.
    $name = 'theme_gourmet_boost/slide6caption';
    $title = get_string('slidecaption', 'theme_gourmet_boost');
    $description = get_string('slidecaptiondesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    // CTA URL.
    $name = 'theme_gourmet_boost/slide6url';
    $title = get_string('slideurl', 'theme_gourmet_boost');
    $description = get_string('slideurldesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // CTA URL open in new window    
    $name = 'theme_gourmet_boost/slide6urlopennew';
    $title = get_string('opennew', 'theme_gourmet_boost');
    $description = get_string('opennewdesc', 'theme_gourmet_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    

    $settings->add($page);