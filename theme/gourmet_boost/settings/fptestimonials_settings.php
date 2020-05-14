<?php 
	
	
	defined('MOODLE_INTERNAL') || die();
	
	/* Frontpage Testimonials */
    
    $page = new admin_settingpage('theme_gourmet_boost_testimonials', get_string('testimonialsheading', 'theme_gourmet_boost'));
	$page->add(new admin_setting_heading('theme_gourmet_boost_testimonials', get_string('testimonialssub', 'theme_gourmet_boost'),
            format_text(get_string('testimonialsdesc' , 'theme_gourmet_boost'), FORMAT_MARKDOWN)));
    
    // Enable Testimonials section
    $name = 'theme_gourmet_boost/usetestimonials';
    $title = get_string('usetestimonials', 'theme_gourmet_boost');
    $description = get_string('usetestimonialsdesc', 'theme_gourmet_boost');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    /* Testimonial 1 */
    
    // Description for Testimonial 1
    $name = 'theme_gourmet_boost/testimonial1info';
    $heading = get_string('testimonial1', 'theme_gourmet_boost');
    $information = get_string('testimonial1desc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Testimonial Image 
    $name = 'theme_gourmet_boost/testimonial1image';
    $title = get_string('testimonialimage', 'theme_gourmet_boost');
    $description = get_string('testimonialimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_gourmet_boost/testimonial1name';
    $title = get_string('testimonialname', 'theme_gourmet_boost');
    $description = get_string('testimonialnamedesc', 'theme_gourmet_boost');
    $default = 'Kate Doe';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Meta
    $name = 'theme_gourmet_boost/testimonial1meta';
    $title = get_string('testimonialmeta', 'theme_gourmet_boost');
    $description = get_string('testimonialmetadesc', 'theme_gourmet_boost');
    $default = 'London College';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    
    // Testimonial Content 
    $name = 'theme_gourmet_boost/testimonial1content';
    $title = get_string('testimonialcontent', 'theme_gourmet_boost');
    $description = get_string('testimonialcontentdesc', 'theme_gourmet_boost');
    $default = '<p>Testimonial 1 goes here. You can add up to 6 testimonials. Lorem ipsum dolor sit amet consectetur adipiscing elit. Integer suscipit, elit sed placerat aliquam, velit nulla semper lectus.</p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Testimonial 2 */
    
    // Description for Testimonial 2
    $name = 'theme_gourmet_boost/testimonial2info';
    $heading = get_string('testimonial2', 'theme_gourmet_boost');
    $information = get_string('testimonial2desc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Testimonial Image 
    $name = 'theme_gourmet_boost/testimonial2image';
    $title = get_string('testimonialimage', 'theme_gourmet_boost');
    $description = get_string('testimonialimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_gourmet_boost/testimonial2name';
    $title = get_string('testimonialname', 'theme_gourmet_boost');
    $description = get_string('testimonialnamedesc', 'theme_gourmet_boost');
    $default = 'Tony Doe';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Meta
    $name = 'theme_gourmet_boost/testimonial2meta';
    $title = get_string('testimonialmeta', 'theme_gourmet_boost');
    $description = get_string('testimonialmetadesc', 'theme_gourmet_boost');
    $default = 'New York College';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    // Testimonial Content 
    $name = 'theme_gourmet_boost/testimonial2content';
    $title = get_string('testimonialcontent', 'theme_gourmet_boost');
    $description = get_string('testimonialcontentdesc', 'theme_gourmet_boost');
    $default = '<p>Testimonial 2 goes here. You can add up to 6 testimonials. Lorem ipsum dolor sit amet consectetur adipiscing elit. Integer suscipit, elit sed placerat aliquam, velit nulla semper lectus.</p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Testimonial 3 */
    
    // Description for Testimonial 3
    $name = 'theme_gourmet_boost/testimonial3info';
    $heading = get_string('testimonial3', 'theme_gourmet_boost');
    $information = get_string('testimonial3desc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Testimonial Image 
    $name = 'theme_gourmet_boost/testimonial3image';
    $title = get_string('testimonialimage', 'theme_gourmet_boost');
    $description = get_string('testimonialimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_gourmet_boost/testimonial3name';
    $title = get_string('testimonialname', 'theme_gourmet_boost');
    $description = get_string('testimonialnamedesc', 'theme_gourmet_boost');
    $default = 'Marie Doe';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Meta
    $name = 'theme_gourmet_boost/testimonial3meta';
    $title = get_string('testimonialmeta', 'theme_gourmet_boost');
    $description = get_string('testimonialmetadesc', 'theme_gourmet_boost');
    $default = 'Berlin College';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    // Testimonial Content 
    $name = 'theme_gourmet_boost/testimonial3content';
    $title = get_string('testimonialcontent', 'theme_gourmet_boost');
    $description = get_string('testimonialcontentdesc', 'theme_gourmet_boost');
    $default = '<p>Testimonial 3 goes here. You can add up to 6 testimonials. Lorem ipsum dolor sit amet consectetur adipiscing elit. Integer suscipit, elit sed placerat aliquam, velit nulla semper lectus.</p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Testimonial 4 */
    
    // Description for Testimonial 4
    $name = 'theme_gourmet_boost/testimonial4info';
    $heading = get_string('testimonial4', 'theme_gourmet_boost');
    $information = get_string('testimonial4desc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Testimonial Image 
    $name = 'theme_gourmet_boost/testimonial4image';
    $title = get_string('testimonialimage', 'theme_gourmet_boost');
    $description = get_string('testimonialimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_gourmet_boost/testimonial4name';
    $title = get_string('testimonialname', 'theme_gourmet_boost');
    $description = get_string('testimonialnamedesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Meta
    $name = 'theme_gourmet_boost/testimonial4meta';
    $title = get_string('testimonialmeta', 'theme_gourmet_boost');
    $description = get_string('testimonialmetadesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    
    // Testimonial Content 
    $name = 'theme_gourmet_boost/testimonial4content';
    $title = get_string('testimonialcontent', 'theme_gourmet_boost');
    $description = get_string('testimonialcontentdesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    /* Testimonial 5 */
    
    // Description for Testimonial 5
    $name = 'theme_gourmet_boost/testimonial5info';
    $heading = get_string('testimonial5', 'theme_gourmet_boost');
    $information = get_string('testimonial5desc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Testimonial Image 
    $name = 'theme_gourmet_boost/testimonial5image';
    $title = get_string('testimonialimage', 'theme_gourmet_boost');
    $description = get_string('testimonialimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial5image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_gourmet_boost/testimonial5name';
    $title = get_string('testimonialname', 'theme_gourmet_boost');
    $description = get_string('testimonialnamedesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Meta
    $name = 'theme_gourmet_boost/testimonial5meta';
    $title = get_string('testimonialmeta', 'theme_gourmet_boost');
    $description = get_string('testimonialmetadesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    // Testimonial Content 
    $name = 'theme_gourmet_boost/testimonial5content';
    $title = get_string('testimonialcontent', 'theme_gourmet_boost');
    $description = get_string('testimonialcontentdesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Testimonial 6 */
    
    // Description for Testimonial 6
    $name = 'theme_gourmet_boost/testimonial6info';
    $heading = get_string('testimonial6', 'theme_gourmet_boost');
    $information = get_string('testimonial6desc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Testimonial Image 
    $name = 'theme_gourmet_boost/testimonial6image';
    $title = get_string('testimonialimage', 'theme_gourmet_boost');
    $description = get_string('testimonialimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial6image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_gourmet_boost/testimonial6name';
    $title = get_string('testimonialname', 'theme_gourmet_boost');
    $description = get_string('testimonialnamedesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Title
    $name = 'theme_gourmet_boost/testimonial6meta';
    $title = get_string('testimonialmeta', 'theme_gourmet_boost');
    $description = get_string('testimonialmetadesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    // Testimonial Content 
    $name = 'theme_gourmet_boost/testimonial6content';
    $title = get_string('testimonialcontent', 'theme_gourmet_boost');
    $description = get_string('testimonialcontentdesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $settings->add($page);
    
	
