<?php 
	
	
	defined('MOODLE_INTERNAL') || die();
	
    /* Frontpage Featured Blocks */	
	$page = new admin_settingpage('theme_gourmet_boost_homeblocks', get_string('homeblocksheading', 'theme_gourmet_boost'));
	$page->add(new admin_setting_heading('theme_gourmet_boost_homeblocks', get_string('homeblocksheadingsub', 'theme_gourmet_boost'),
            format_text(get_string('homeblocksdesc' , 'theme_gourmet_boost'), FORMAT_MARKDOWN)));
            
            
	//Enable Featured Blocks.
    $name = 'theme_gourmet_boost/usehomeblocks';
    $title = get_string('usehomeblocks', 'theme_gourmet_boost');
    $description = get_string('usehomeblocksdesc', 'theme_gourmet_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    

	
	/* Home Block 1 */	
    $name = 'theme_gourmet_boost/homeblock1info';
    $heading = get_string('homeblock1info', 'theme_gourmet_boost');
    $information = get_string('homeblock1desc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
	
	$name = 'theme_gourmet_boost/homeblock1title';
    $title = get_string('homeblocktitle', 'theme_gourmet_boost');
    $description = get_string('homeblocktitledesc', 'theme_gourmet_boost');
    $default = 'Heading One';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock1image';
    $title = get_string('homeblockimage', 'theme_gourmet_boost');
    $description = get_string('homeblockimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock1content';
    $title = get_string('homeblockcontent', 'theme_gourmet_boost');
    $description = get_string('homeblockcontentdesc', 'theme_gourmet_boost');
    $default = 'Block 1 content goes here Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock1url';
    $title = get_string('homeblockurl', 'theme_gourmet_boost');
    $description = get_string('homeblockbuttonurldesc', 'theme_gourmet_boost');
    $default = '#link1';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock1buttontext';
    $title = get_string('homeblockbuttontext', 'theme_gourmet_boost');
    $description = get_string('homeblockbuttontextdesc', 'theme_gourmet_boost');
    $default = 'Find out more';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
     
    $name = 'theme_gourmet_boost/homeblock1urlopennew';
    $title = get_string('opennew', 'theme_gourmet_boost');
    $description = get_string('opennewdesc', 'theme_gourmet_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    /* Home Block 2 */    
    $name = 'theme_gourmet_boost/homeblock2info';
    $heading = get_string('homeblock2info', 'theme_gourmet_boost');
    $information = get_string('homeblock2desc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);   
    
	$name = 'theme_gourmet_boost/homeblock2title';
    $title = get_string('homeblocktitle', 'theme_gourmet_boost');
    $description = get_string('homeblocktitledesc', 'theme_gourmet_boost');
    $default = 'Heading Two';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock2image';
    $title = get_string('homeblockimage', 'theme_gourmet_boost');
    $description = get_string('homeblockimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock2content';
    $title = get_string('homeblockcontent', 'theme_gourmet_boost');
    $description = get_string('homeblockcontentdesc', 'theme_gourmet_boost');
    $default = 'Block 2 content goes here Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock2url';
    $title = get_string('homeblockurl', 'theme_gourmet_boost');
    $description = get_string('homeblockbuttonurldesc', 'theme_gourmet_boost');
    $default = '#link2';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock2buttontext';
    $title = get_string('homeblockbuttontext', 'theme_gourmet_boost');
    $description = get_string('homeblockbuttontextdesc', 'theme_gourmet_boost');
    $default = 'Find out more';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
     
    $name = 'theme_gourmet_boost/homeblock2urlopennew';
    $title = get_string('opennew', 'theme_gourmet_boost');
    $description = get_string('opennewdesc', 'theme_gourmet_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Home Block 3 */        
    $name = 'theme_gourmet_boost/homeblock3info';
    $heading = get_string('homeblock3info', 'theme_gourmet_boost');
    $information = get_string('homeblock3desc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
	$name = 'theme_gourmet_boost/homeblock3title';
    $title = get_string('homeblocktitle', 'theme_gourmet_boost');
    $description = get_string('homeblocktitledesc', 'theme_gourmet_boost');
    $default = 'Heading Three';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock3image';
    $title = get_string('homeblockimage', 'theme_gourmet_boost');
    $description = get_string('homeblockimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock3content';
    $title = get_string('homeblockcontent', 'theme_gourmet_boost');
    $description = get_string('homeblockcontentdesc', 'theme_gourmet_boost');
    $default = 'Block 3 content goes here Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock3url';
    $title = get_string('homeblockurl', 'theme_gourmet_boost');
    $description = get_string('homeblockbuttonurldesc', 'theme_gourmet_boost');
    $default = '#link3';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock3buttontext';
    $title = get_string('homeblockbuttontext', 'theme_gourmet_boost');
    $description = get_string('homeblockbuttontextdesc', 'theme_gourmet_boost');
    $default = 'Find out more';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
     
    $name = 'theme_gourmet_boost/homeblock3urlopennew';
    $title = get_string('opennew', 'theme_gourmet_boost');
    $description = get_string('opennewdesc', 'theme_gourmet_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Home Block 4 */    
    $name = 'theme_gourmet_boost/homeblock4info';
    $heading = get_string('homeblock4info', 'theme_gourmet_boost');
    $information = get_string('homeblock4desc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
	$name = 'theme_gourmet_boost/homeblock4title';
    $title = get_string('homeblocktitle', 'theme_gourmet_boost');
    $description = get_string('homeblocktitledesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock4image';
    $title = get_string('homeblockimage', 'theme_gourmet_boost');
    $description = get_string('homeblockimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock4content';
    $title = get_string('homeblockcontent', 'theme_gourmet_boost');
    $description = get_string('homeblockcontentdesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock4url';
    $title = get_string('homeblockurl', 'theme_gourmet_boost');
    $description = get_string('homeblockbuttonurldesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock4buttontext';
    $title = get_string('homeblockbuttontext', 'theme_gourmet_boost');
    $description = get_string('homeblockbuttontextdesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
     
    $name = 'theme_gourmet_boost/homeblock4urlopennew';
    $title = get_string('opennew', 'theme_gourmet_boost');
    $description = get_string('opennewdesc', 'theme_gourmet_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    /* Home Block 5 */    
    $name = 'theme_gourmet_boost/homeblock5info';
    $heading = get_string('homeblock5info', 'theme_gourmet_boost');
    $information = get_string('homeblock5desc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
	$name = 'theme_gourmet_boost/homeblock5title';
    $title = get_string('homeblocktitle', 'theme_gourmet_boost');
    $description = get_string('homeblocktitledesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock5image';
    $title = get_string('homeblockimage', 'theme_gourmet_boost');
    $description = get_string('homeblockimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock5image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock5content';
    $title = get_string('homeblockcontent', 'theme_gourmet_boost');
    $description = get_string('homeblockcontentdesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock5url';
    $title = get_string('homeblockurl', 'theme_gourmet_boost');
    $description = get_string('homeblockbuttonurldesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);    
    
$name = 'theme_gourmet_boost/homeblock5buttontext';
    $title = get_string('homeblockbuttontext', 'theme_gourmet_boost');
    $description = get_string('homeblockbuttontextdesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
     
    $name = 'theme_gourmet_boost/homeblock5urlopennew';
    $title = get_string('opennew', 'theme_gourmet_boost');
    $description = get_string('opennewdesc', 'theme_gourmet_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Home Block 6 */   
    $name = 'theme_gourmet_boost/homeblock6info';
    $heading = get_string('homeblock6info', 'theme_gourmet_boost');
    $information = get_string('homeblock6desc', 'theme_gourmet_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
     
	$name = 'theme_gourmet_boost/homeblock6title';
    $title = get_string('homeblocktitle', 'theme_gourmet_boost');
    $description = get_string('homeblocktitledesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock6image';
    $title = get_string('homeblockimage', 'theme_gourmet_boost');
    $description = get_string('homeblockimagedesc', 'theme_gourmet_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock6image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock6content';
    $title = get_string('homeblockcontent', 'theme_gourmet_boost');
    $description = get_string('homeblockcontentdesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_gourmet_boost/homeblock6url';
    $title = get_string('homeblockurl', 'theme_gourmet_boost');
    $description = get_string('homeblockbuttonurldesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);    
    
    $name = 'theme_gourmet_boost/homeblock6buttontext';
    $title = get_string('homeblockbuttontext', 'theme_gourmet_boost');
    $description = get_string('homeblockbuttontextdesc', 'theme_gourmet_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
     
    $name = 'theme_gourmet_boost/homeblock6urlopennew';
    $title = get_string('opennew', 'theme_gourmet_boost');
    $description = get_string('opennewdesc', 'theme_gourmet_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
      
    
    $settings->add($page);