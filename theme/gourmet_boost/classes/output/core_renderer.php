<?php

namespace theme_gourmet_boost\output;

use coding_exception;
use html_writer;
use tabobject;
use tabtree;
use custom_menu_item;
use custom_menu;
use block_contents;
use navigation_node;
use action_link;
use stdClass;
use moodle_url;
use preferences_groups;
use action_menu;
use help_icon;
use single_button;
use single_select;
use paging_bar;
use url_select;
use context_course;
use pix_icon;
use theme_config;

defined('MOODLE_INTERNAL') || die;

require_once ($CFG->dirroot . "/course/renderer.php");
//require_once ($CFG->libdir . '/coursecatlib.php'); //From Moodle 3.6 - Class coursecat is now alias to autoloaded class core_course_category, course_in_list is an alias to core_course_list_element. Class coursecat_sortable_records is deprecated without replacement. Do not include coursecatlib.php


class core_renderer extends \theme_boost\output\core_renderer {
    
    
    
    
    public function image_url($imagename, $component = 'moodle') {
        // Strip -24, -64, -256  etc from the end of filetype icons so we
        // only need to provide one SVG, see MDL-47082.
        $imagename = \preg_replace('/-\d\d\d?$/', '', $imagename);
        return $this->page->theme->image_url($imagename, $component);
    }
    
    
    public function site_logo() {
	     
        global $PAGE;
        
        $setting = $PAGE->theme->setting_file_url('logo', 'logo');
        
        return $setting != '' ? $setting : '';
        
    }
    
    public function header_phone() {
	     
        global $PAGE;
        
        $setting = $PAGE->theme->settings->headerphone;
        
        return $setting != '' ? $setting : '';
        
    }
    
    public function header_email() {
	     
        global $PAGE;
        
        $setting = $PAGE->theme->settings->headeremail;
        
        return $setting != '' ? $setting : '';
        
    }
    
    public function header_widget() {
	     
        global $PAGE;
        
        $setting = $PAGE->theme->settings->headerwidget;
        
        return $setting != '' ? $setting : '';
        
    }

    
    public function google_analyticsid() {
        global $PAGE;
        
        $setting = $PAGE->theme->settings->analyticsid;
        
        return $setting != '' ? $setting : '';
        
    }
    
    public function ios_homescreen_icons() {
        global $PAGE;

        
        //iPhone icon
        $iphoneicon = (empty($PAGE->theme->setting_file_url('iphoneicon', 'iphoneicon'))) ? false : $PAGE->theme->setting_file_url('iphoneicon', 'iphoneicon');

        
        //iPhone Retina icon
        $iphoneretinaicon = (empty($PAGE->theme->setting_file_url('iphoneretinaicon', 'iphoneretinaicon'))) ? false : $PAGE->theme->setting_file_url('iphoneretinaicon', 'iphoneretinaicon');
        
         //iPad icon
        $ipadicon = (empty($PAGE->theme->setting_file_url('ipadicon', 'ipadicon'))) ? false : $PAGE->theme->setting_file_url('ipadicon', 'ipadicon');
        
        //ipad Retina icon
        $ipadretinaicon = (empty($PAGE->theme->setting_file_url('ipadretinaicon', 'ipadretinaicon'))) ? false : $PAGE->theme->setting_file_url('ipadretinaicon', 'ipadretinaicon');


        $ios_homescreen_icons = [
        
            'iphoneicon' => $iphoneicon, 
            'iphoneretinaicon' => $iphoneretinaicon, 
            'ipadicon' => $ipadicon, 
            'ipadretinaicon' => $ipadretinaicon, 

        
        ];

        return $this->render_from_template('theme_gourmet_boost/ios_homescreen_icons', $ios_homescreen_icons);
    }
    
    public function moodle_validator() {
        global $CFG;
        
        $valid = $CFG->branch == '38';
        

        $moodle_validator = [
        
            'invalid' => !$valid, 
        ];

        return $this->render_from_template('theme_gourmet_boost/moodle_validator', $moodle_validator);
    }

    
    public function header_alert() {
        global $PAGE;
        
        $usealert = $PAGE->theme->settings->usealert== 1;
        $alertcontent = (empty($PAGE->theme->settings->alertcontent)) ? false : format_text($PAGE->theme->settings->alertcontent);
        $alertbgcolor = (empty($PAGE->theme->settings->alertbgcolor)) ? false : $PAGE->theme->settings->alertbgcolor;


        $header_alert = [
        
            'hasalert' => $usealert, 
            'alertcontent' => $alertcontent, 
            'alertbgcolor' => $alertbgcolor,


        ];

        return $this->render_from_template('theme_gourmet_boost/header_alert', $header_alert);
    }

    
    
    public function header_socialmedia() {
        global $PAGE;
        
        $useheadersocial = $PAGE->theme->settings->useheadersocial == 1;
      
        $haswebsite = (empty($PAGE->theme->settings->website)) ? false : $PAGE->theme->settings->website;
        $hastwitter = (empty($PAGE->theme->settings->twitter)) ? false : $PAGE->theme->settings->twitter;
        $hasfacebook = (empty($PAGE->theme->settings->facebook)) ? false : $PAGE->theme->settings->facebook;
        $hasgoogleplus = (empty($PAGE->theme->settings->googleplus)) ? false : $PAGE->theme->settings->googleplus;
        $haslinkedin = (empty($PAGE->theme->settings->linkedin)) ? false : $PAGE->theme->settings->linkedin;
        $hasyoutube = (empty($PAGE->theme->settings->youtube)) ? false : $PAGE->theme->settings->youtube;
        $hasvimeo = (empty($PAGE->theme->settings->vimeo)) ? false : $PAGE->theme->settings->vimeo;
        $hasinstagram = (empty($PAGE->theme->settings->instagram)) ? false : $PAGE->theme->settings->instagram;
        $haspinterest = (empty($PAGE->theme->settings->pinterest)) ? false : $PAGE->theme->settings->pinterest;
        $hasflickr = (empty($PAGE->theme->settings->flickr)) ? false : $PAGE->theme->settings->flickr;
        $hastumblr = (empty($PAGE->theme->settings->tumblr)) ? false : $PAGE->theme->settings->tumblr;
        $hasslideshare = (empty($PAGE->theme->settings->slideshare)) ? false : $PAGE->theme->settings->slideshare;
        $hasskype = (empty($PAGE->theme->settings->skype)) ? false : $PAGE->theme->settings->skype;
        $haswhatsapp = (empty($PAGE->theme->settings->whatsapp)) ? false : $PAGE->theme->settings->whatsapp;
        $hassnapchat = (empty($PAGE->theme->settings->snapchat)) ? false : $PAGE->theme->settings->snapchat;
        $hasweixin = (empty($PAGE->theme->settings->weixin)) ? false : $PAGE->theme->settings->weixin;
        $hasweibo = (empty($PAGE->theme->settings->weibo)) ? false : $PAGE->theme->settings->weibo;
        $hasrss = (empty($PAGE->theme->settings->rss)) ? false : $PAGE->theme->settings->rss;

        $hassocial1 = (empty($PAGE->theme->settings->social1)) ? false : $PAGE->theme->settings->social1;
        $social1icon = (empty($PAGE->theme->settings->socialicon1)) ? '' : $PAGE->theme->settings->socialicon1;
        $hassocial2 = (empty($PAGE->theme->settings->social2)) ? false : $PAGE->theme->settings->social2;
        $social2icon = (empty($PAGE->theme->settings->socialicon2)) ? '' : $PAGE->theme->settings->socialicon2;
        $hassocial3 = (empty($PAGE->theme->settings->social3)) ? false : $PAGE->theme->settings->social3;
        $social3icon = (empty($PAGE->theme->settings->socialicon3)) ? '' : $PAGE->theme->settings->socialicon3;

        $socialcontext = [

        'useheadersocial' => $useheadersocial,


        'socialmedia' => array(
	        
	        array(
                'haslink' => $haswebsite,
                'linkicon' => 'globe'
            ) ,
           
            array(
                'haslink' => $hastwitter,
                'linkicon' => 'twitter'
            ) ,
            array(
                'haslink' => $hasfacebook,
                'linkicon' => 'facebook'
            ) ,
            array(
                'haslink' => $hasgoogleplus,
                'linkicon' => 'google-plus'
            ) ,
            array(
                'haslink' => $haslinkedin,
                'linkicon' => 'linkedin'
            ) ,
            array(
                'haslink' => $hasyoutube,
                'linkicon' => 'youtube'
            ) ,
            array(
                'haslink' => $hasvimeo,
                'linkicon' => 'vimeo'
            ) ,
            array(
                'haslink' => $hasinstagram,
                'linkicon' => 'instagram'
            ) ,
            array(
                'haslink' => $haspinterest,
                'linkicon' => 'pinterest'
            ) ,
            array(
                'haslink' => $hasflickr,
                'linkicon' => 'flickr'
            ) ,
            array(
                'haslink' => $hastumblr,
                'linkicon' => 'tumblr'
            ) ,
            array(
                'haslink' => $hasslideshare,
                'linkicon' => 'slideshare'
            ) ,
            array(
                'haslink' => $hasskype,
                'linkicon' => 'skype'
            ) ,
            array(
                'haslink' => $haswhatsapp,
                'linkicon' => 'whatsapp'
            ) ,
            array(
                'haslink' => $hassnapchat,
                'linkicon' => 'snapchat'
            ) ,
            array(
                'haslink' => $hasweixin,
                'linkicon' => 'weixin'
            ) ,
            array(
                'haslink' => $hasweibo,
                'linkicon' => 'weibo'
            ) ,
            array(
                'haslink' => $hasrss,
                'linkicon' => 'rss'
            ) ,
            array(
                'haslink' => $hassocial1,
                'linkicon' => $social1icon
            ) ,
            array(
                'haslink' => $hassocial2,
                'linkicon' => $social2icon
            ) ,
            array(
                'haslink' => $hassocial3,
                'linkicon' => $social3icon
            ) ,
        ) ];

        return $this->render_from_template('theme_gourmet_boost/header_socialmedia', $socialcontext);
    }
    
   
   public function fp_slideshow() {
	   
        global $PAGE, $OUTPUT;

        $useheroslideshow = $PAGE->theme->settings->useheroslideshow == 1;

        $hasslide1 = (empty($PAGE->theme->setting_file_url('slide1image', 'slide1image'))) ? false : $PAGE->theme->setting_file_url('slide1image', 'slide1image');
        $hasslide2 = (empty($PAGE->theme->setting_file_url('slide2image', 'slide2image'))) ? false : $PAGE->theme->setting_file_url('slide2image', 'slide2image');
        $hasslide3 = (empty($PAGE->theme->setting_file_url('slide3image', 'slide3image'))) ? false : $PAGE->theme->setting_file_url('slide3image', 'slide3image');
        $hasslide4 = (empty($PAGE->theme->setting_file_url('slide4image', 'slide4image'))) ? false : $PAGE->theme->setting_file_url('slide4image', 'slide4image');
        
        $slide1 = (empty($PAGE->theme->settings->slide1)) ? false : format_text($PAGE->theme->settings->slide1);
        $slide2 = (empty($PAGE->theme->settings->slide2)) ? false : format_text($PAGE->theme->settings->slide2);
        $slide3 = (empty($PAGE->theme->settings->slide3)) ? false : format_text($PAGE->theme->settings->slide3);
        $slide4 = (empty($PAGE->theme->settings->slide4)) ? false : format_text($PAGE->theme->settings->slide4);
        
        
        $slide1caption = (empty($PAGE->theme->settings->slide1caption)) ? false : format_text($PAGE->theme->settings->slide1caption);
        $slide2caption = (empty($PAGE->theme->settings->slide2caption)) ? false : format_text($PAGE->theme->settings->slide2caption);
        $slide3caption = (empty($PAGE->theme->settings->slide3caption)) ? false : format_text($PAGE->theme->settings->slide3caption);
        $slide4caption = (empty($PAGE->theme->settings->slide4caption)) ? false : format_text($PAGE->theme->settings->slide4caption);
        
        
        $slide1url = (empty($PAGE->theme->settings->slide1url)) ? false : $PAGE->theme->settings->slide1url;
        $slide2url = (empty($PAGE->theme->settings->slide2url)) ? false : $PAGE->theme->settings->slide2url;
        $slide3url = (empty($PAGE->theme->settings->slide3url)) ? false : $PAGE->theme->settings->slide3url;
        $slide4url = (empty($PAGE->theme->settings->slide4url)) ? false : $PAGE->theme->settings->slide4url;
        
        
        $slide1urlopennew = $PAGE->theme->settings->slide1urlopennew == 1;
        $slide2urlopennew = $PAGE->theme->settings->slide2urlopennew == 1;
        $slide3urlopennew = $PAGE->theme->settings->slide3urlopennew == 1;
        $slide4urlopennew = $PAGE->theme->settings->slide4urlopennew == 1;


        $fp_slideshow = [

        'useheroslideshow' => $useheroslideshow,      
	    
	    'slideshow' => array(
	        
            array(
	   
                'hasslide' => $hasslide1,
                'slideimage' => $hasslide1,
                'slidetitle' => $slide1,
                'slidecaption' => $slide1caption,                
                'hasslidedata'=> ($slide1caption || $slide1) ? true: false,
                'slideurl' => $slide1url,
                'urlopennew' => $slide1urlopennew,
            ) ,
            
            array(
	   
                'hasslide' => $hasslide2,
                'slideimage' => $hasslide2,
                'slidetitle' => $slide2,
                'slidecaption' => $slide2caption,                
                'hasslidedata'=> ($slide2caption || $slide2) ? true: false,
                'slideurl' => $slide2url,
                'urlopennew' => $slide2urlopennew,
            ) ,
            
            array(
	   
                'hasslide' => $hasslide3,
                'slideimage' => $hasslide3,
                'slidetitle' => $slide3,
                'slidecaption' => $slide3caption,                
                'hasslidedata'=> ($slide3caption || $slide3) ? true: false,
                'slideurl' => $slide3url,
                'urlopennew' => $slide3urlopennew,
            ) ,
            
            array(
	   
                'hasslide' => $hasslide4,
                'slideimage' => $hasslide4,
                'slidetitle' => $slide4,
                'slidecaption' => $slide4caption,                
                'hasslidedata'=> ($slide4caption || $slide4) ? true: false,
                'slideurl' => $slide4url,
                'urlopennew' => $slide4urlopennew,
            ) ,                      
        ),

        ];

        return $this->render_from_template('theme_gourmet_boost/fp_slideshow', $fp_slideshow);
    } 
    

   
    public function fp_features() {
        global $PAGE;
        
        $usehomeblocks = $PAGE->theme->settings->usehomeblocks == 1;
        

        $homeblock1title = (empty($PAGE->theme->settings->homeblock1title)) ? false : format_text($PAGE->theme->settings->homeblock1title);
        $homeblock1content = (empty($PAGE->theme->settings->homeblock1content)) ? false : format_text($PAGE->theme->settings->homeblock1content);
        $homeblock1buttontext = (empty($PAGE->theme->settings->homeblock1buttontext)) ? false : format_text($PAGE->theme->settings->homeblock1buttontext);
        $homeblock1url = (empty($PAGE->theme->settings->homeblock1url)) ? false : $PAGE->theme->settings->homeblock1url;
        $homeblock1urlopennew = $PAGE->theme->settings->homeblock1urlopennew== 1;
        $homeblock1image = (empty($PAGE->theme->setting_file_url('homeblock1image', 'homeblock1image'))) ? false : $PAGE->theme->setting_file_url('homeblock1image', 'homeblock1image');
        


        

        $homeblock2title = (empty($PAGE->theme->settings->homeblock2title)) ? false : format_text($PAGE->theme->settings->homeblock2title);
        $homeblock2content = (empty($PAGE->theme->settings->homeblock2content)) ? false : format_text($PAGE->theme->settings->homeblock2content);
        $homeblock2buttontext = (empty($PAGE->theme->settings->homeblock2buttontext)) ? false : format_text($PAGE->theme->settings->homeblock2buttontext);
        $homeblock2url = (empty($PAGE->theme->settings->homeblock2url)) ? false : $PAGE->theme->settings->homeblock2url;
        $homeblock2urlopennew = $PAGE->theme->settings->homeblock2urlopennew== 1;
        $homeblock2image = (empty($PAGE->theme->setting_file_url('homeblock2image', 'homeblock2image'))) ? false : $PAGE->theme->setting_file_url('homeblock2image', 'homeblock2image');

        
        $homeblock3title = (empty($PAGE->theme->settings->homeblock3title)) ? false : format_text($PAGE->theme->settings->homeblock3title);
        $homeblock3content = (empty($PAGE->theme->settings->homeblock3content)) ? false : format_text($PAGE->theme->settings->homeblock3content);
        $homeblock3buttontext = (empty($PAGE->theme->settings->homeblock3buttontext)) ? false : format_text($PAGE->theme->settings->homeblock3buttontext);
        $homeblock3url = (empty($PAGE->theme->settings->homeblock3url)) ? false : $PAGE->theme->settings->homeblock3url;
        $homeblock3urlopennew = $PAGE->theme->settings->homeblock3urlopennew== 1;
        $homeblock3image = (empty($PAGE->theme->setting_file_url('homeblock3image', 'homeblock3image'))) ? false : $PAGE->theme->setting_file_url('homeblock3image', 'homeblock3image');

        
        $homeblock4title = (empty($PAGE->theme->settings->homeblock4title)) ? false : format_text($PAGE->theme->settings->homeblock4title);
        $homeblock4content = (empty($PAGE->theme->settings->homeblock4content)) ? false : format_text($PAGE->theme->settings->homeblock4content);
        $homeblock4buttontext = (empty($PAGE->theme->settings->homeblock4buttontext)) ? false : format_text($PAGE->theme->settings->homeblock4buttontext);
        $homeblock4url = (empty($PAGE->theme->settings->homeblock4url)) ? false : $PAGE->theme->settings->homeblock4url;
        $homeblock4urlopennew = $PAGE->theme->settings->homeblock4urlopennew== 1;
        $homeblock4image = (empty($PAGE->theme->setting_file_url('homeblock4image', 'homeblock4image'))) ? false : $PAGE->theme->setting_file_url('homeblock4image', 'homeblock4image');

        
        $homeblock5title = (empty($PAGE->theme->settings->homeblock5title)) ? false : format_text($PAGE->theme->settings->homeblock5title);
        $homeblock5content = (empty($PAGE->theme->settings->homeblock5content)) ? false : format_text($PAGE->theme->settings->homeblock5content);
        $homeblock5buttontext = (empty($PAGE->theme->settings->homeblock5buttontext)) ? false : format_text($PAGE->theme->settings->homeblock5buttontext);
        $homeblock5url = (empty($PAGE->theme->settings->homeblock5url)) ? false : $PAGE->theme->settings->homeblock5url;
        $homeblock5urlopennew = $PAGE->theme->settings->homeblock5urlopennew== 1;
        $homeblock5image = (empty($PAGE->theme->setting_file_url('homeblock5image', 'homeblock5image'))) ? false : $PAGE->theme->setting_file_url('homeblock5image', 'homeblock5image');

        
        $homeblock6title = (empty($PAGE->theme->settings->homeblock6title)) ? false : format_text($PAGE->theme->settings->homeblock6title);
        $homeblock6content = (empty($PAGE->theme->settings->homeblock6content)) ? false : format_text($PAGE->theme->settings->homeblock6content);
        $homeblock6buttontext = (empty($PAGE->theme->settings->homeblock6buttontext)) ? false : format_text($PAGE->theme->settings->homeblock6buttontext);
        $homeblock6url = (empty($PAGE->theme->settings->homeblock6url)) ? false : $PAGE->theme->settings->homeblock6url;
        $homeblock6urlopennew = $PAGE->theme->settings->homeblock6urlopennew== 1;
        $homeblock6image = (empty($PAGE->theme->setting_file_url('homeblock6image', 'homeblock6image'))) ? false : $PAGE->theme->setting_file_url('homeblock6image', 'homeblock6image');

        
        

        $fp_features = [

        'usefeaturedblocks' => $usehomeblocks,

        'featuredblocks' => array(
	        
            array(
	            'blockcount'=> '1',
                'hasblock' => $homeblock1title,
                'blockimage' => $homeblock1image,
                'blocktitle' => $homeblock1title,
                'blockcontent' => $homeblock1content,
                'blockhascta' => ( $homeblock1url || $homeblock1buttontext )? true: false,
                'blockurl' => $homeblock1url,
                'blockbuttontext' => $homeblock1buttontext,
                'opennew' => $homeblock1urlopennew,
            ) ,
            
           
            array(
	            'blockcount'=> '2',
                'hasblock' => $homeblock2title,
                'blockimage' => $homeblock2image,
                'blocktitle' => $homeblock2title,
                'blockcontent' => $homeblock2content,
                'blockhascta' => ( $homeblock2url || $homeblock2buttontext )? true: false,
                'blockurl' => $homeblock2url,
                'blockbuttontext' => $homeblock2buttontext,
                'opennew' => $homeblock2urlopennew,
            ) ,
            
            
            array(
	            'blockcount'=> '3',
                'hasblock' => $homeblock3title,
                'blockimage' => $homeblock3image,
                'blocktitle' => $homeblock3title,
                'blockcontent' => $homeblock3content,
                'blockhascta' => ( $homeblock3url || $homeblock3buttontext )? true: false,
                'blockurl' => $homeblock3url,
                'blockbuttontext' => $homeblock3buttontext,
                'opennew' => $homeblock3urlopennew,
            ) ,
            
            array(
	            'blockcount'=> '4',
                'hasblock' => $homeblock4title,
                'blockimage' => $homeblock4image,
                'blocktitle' => $homeblock4title,
                'blockcontent' => $homeblock4content,
                'blockhascta' => ( $homeblock4url || $homeblock4buttontext )? true: false,
                'blockurl' => $homeblock4url,
                'blockbuttontext' => $homeblock4buttontext,
                'opennew' => $homeblock4urlopennew,
            ) ,
            
            array(
	            'blockcount'=> '5',
                'hasblock' => $homeblock5title,
                'blockimage' => $homeblock5image,
                'blocktitle' => $homeblock5title,
                'blockcontent' => $homeblock5content,
                'blockhascta' => ( $homeblock5url || $homeblock5buttontext )? true: false,
                'blockurl' => $homeblock5url,
                'blockbuttontext' => $homeblock5buttontext,
		        'opennew' => $homeblock5urlopennew,
            ) ,
            
            array(
	            'blockcount'=> '6',
                'hasblock' => $homeblock6title,
                'blockimage' => $homeblock6image,
                'blocktitle' => $homeblock6title,
                'blockcontent' => $homeblock6content,
                'blockhascta' => ( $homeblock6url || $homeblock6buttontext )? true: false,
                'blockurl' => $homeblock6url,
                'blockbuttontext' => $homeblock6buttontext,
                'opennew' => $homeblock6urlopennew,
            ) ,
            
                        
        ) , 
        
        ];

        return $this->render_from_template('theme_gourmet_boost/fp_features', $fp_features);
    }
    
    
    public function fp_logos() {
        global $PAGE;

        $uselogos = $PAGE->theme->settings->uselogos == 1;
        $logossectiontitle = (empty($PAGE->theme->settings->logossectiontitle)) ? false : $PAGE->theme->settings->logossectiontitle;

        
        //Logo 1
        $logo1image = (empty($PAGE->theme->setting_file_url('logo1image', 'logo1image'))) ? false : $PAGE->theme->setting_file_url('logo1image', 'logo1image');
        $logo1alttext = (empty($PAGE->theme->settings->logo1alttext)) ? false : $PAGE->theme->settings->logo1alttext;
        $logo1url = (empty($PAGE->theme->settings->logo1url)) ? false : $PAGE->theme->settings->logo1url;

        //Logo 2
        $logo2image = (empty($PAGE->theme->setting_file_url('logo2image', 'logo2image'))) ? false : $PAGE->theme->setting_file_url('logo2image', 'logo2image');
        $logo2alttext = (empty($PAGE->theme->settings->logo2alttext)) ? false : $PAGE->theme->settings->logo2alttext;
        $logo2url = (empty($PAGE->theme->settings->logo2url)) ? false : $PAGE->theme->settings->logo2url;
        
        //Logo 3
        $logo3image = (empty($PAGE->theme->setting_file_url('logo3image', 'logo3image'))) ? false : $PAGE->theme->setting_file_url('logo3image', 'logo3image');
        $logo3alttext = (empty($PAGE->theme->settings->logo3alttext)) ? false : $PAGE->theme->settings->logo3alttext;
        $logo3url = (empty($PAGE->theme->settings->logo3url)) ? false : $PAGE->theme->settings->logo3url;
        
        //Logo 4
        $logo4image = (empty($PAGE->theme->setting_file_url('logo4image', 'logo4image'))) ? false : $PAGE->theme->setting_file_url('logo4image', 'logo4image');
        $logo4alttext = (empty($PAGE->theme->settings->logo4alttext)) ? false : $PAGE->theme->settings->logo4alttext;
        $logo4url = (empty($PAGE->theme->settings->logo4url)) ? false : $PAGE->theme->settings->logo4url;
        
        //Logo 5
        $logo5image = (empty($PAGE->theme->setting_file_url('logo5image', 'logo5image'))) ? false : $PAGE->theme->setting_file_url('logo5image', 'logo5image');
        $logo5alttext = (empty($PAGE->theme->settings->logo5alttext)) ? false : $PAGE->theme->settings->logo5alttext;
        $logo5url = (empty($PAGE->theme->settings->logo5url)) ? false : $PAGE->theme->settings->logo5url;
        
        //Logo 6
        $logo6image = (empty($PAGE->theme->setting_file_url('logo6image', 'logo6image'))) ? false : $PAGE->theme->setting_file_url('logo6image', 'logo6image');
        $logo6alttext = (empty($PAGE->theme->settings->logo6alttext)) ? false : $PAGE->theme->settings->logo6alttext;
        $logo6url = (empty($PAGE->theme->settings->logo6url)) ? false : $PAGE->theme->settings->logo6url;


        $fp_logos = [

        'uselogos' => $uselogos,
        'logossectiontitle'=> $logossectiontitle,
        
        'logos' => array(
	        
            array(
                'haslogo' => $logo1image,
                'logoimage' => $logo1image,
                'logoalt' => $logo1alttext,
                'logourl' => $logo1url,
            ),     
            array(
                'haslogo' => $logo2image,
                'logoimage' => $logo2image,
                'logoalt' => $logo2alttext,
                'logourl' => $logo2url,
            ),   
            array(
                'haslogo' => $logo3image,
                'logoimage' => $logo3image,
                'logoalt' => $logo3alttext,
                'logourl' => $logo3url,
            ),   
            array(
                'haslogo' => $logo4image,
                'logoimage' => $logo4image,
                'logoalt' => $logo4alttext,
                'logourl' => $logo4url,
            ),
            array(
                'haslogo' => $logo5image,
                'logoimage' => $logo5image,
                'logoalt' => $logo5alttext,
                'logourl' => $logo5url,
            ),    
            array(
                'haslogo' => $logo6image,
                'logoimage' => $logo6image,
                'logoalt' => $logo6alttext,
                'logourl' => $logo6url,
            ),       
        ),

        ];

        return $this->render_from_template('theme_gourmet_boost/fp_logos', $fp_logos);
    }
    
    
    
    public function fp_testimonials() {
        global $PAGE, $OUTPUT;

        $usetestimonials = $PAGE->theme->settings->usetestimonials == 1;
        
        
        $defaultimage = $OUTPUT->image_url('default-profile', 'theme');
        
        //Testimonial 1
        $testimonial1content = (empty($PAGE->theme->settings->testimonial1content)) ? false : format_text($PAGE->theme->settings->testimonial1content);
        $testimonial1image = (empty($PAGE->theme->setting_file_url('testimonial1image', 'testimonial1image'))) ? false : $PAGE->theme->setting_file_url('testimonial1image', 'testimonial1image');
        $testimonial1name = (empty($PAGE->theme->settings->testimonial1name)) ? false : format_text($PAGE->theme->settings->testimonial1name);
        $testimonial1meta = (empty($PAGE->theme->settings->testimonial1meta)) ? false : format_text($PAGE->theme->settings->testimonial1meta);
        
        //Testimonial 2
        $testimonial2content = (empty($PAGE->theme->settings->testimonial2content)) ? false : format_text($PAGE->theme->settings->testimonial2content);
        $testimonial2image = (empty($PAGE->theme->setting_file_url('testimonial2image', 'testimonial2image'))) ? false : $PAGE->theme->setting_file_url('testimonial2image', 'testimonial2image');
        $testimonial2name = (empty($PAGE->theme->settings->testimonial2name)) ? false : format_text($PAGE->theme->settings->testimonial2name);
        $testimonial2meta = (empty($PAGE->theme->settings->testimonial2meta)) ? false : format_text($PAGE->theme->settings->testimonial2meta);
        
        //Testimonial 3
        $testimonial3content = (empty($PAGE->theme->settings->testimonial3content)) ? false : format_text($PAGE->theme->settings->testimonial3content);
        $testimonial3image = (empty($PAGE->theme->setting_file_url('testimonial3image', 'testimonial3image'))) ? false : $PAGE->theme->setting_file_url('testimonial3image', 'testimonial3image');
        $testimonial3name = (empty($PAGE->theme->settings->testimonial3name)) ? false : format_text($PAGE->theme->settings->testimonial3name);
        $testimonial3meta = (empty($PAGE->theme->settings->testimonial3meta)) ? false : format_text($PAGE->theme->settings->testimonial3meta);
        
        //Testimonial 4
        $testimonial4content = (empty($PAGE->theme->settings->testimonial4content)) ? false : format_text($PAGE->theme->settings->testimonial4content);
        $testimonial4image = (empty($PAGE->theme->setting_file_url('testimonial4image', 'testimonial4image'))) ? false : $PAGE->theme->setting_file_url('testimonial4image', 'testimonial4image');
        $testimonial4name = (empty($PAGE->theme->settings->testimonial4name)) ? false : format_text($PAGE->theme->settings->testimonial4name);
        $testimonial4meta = (empty($PAGE->theme->settings->testimonial4meta)) ? false : format_text($PAGE->theme->settings->testimonial4meta);
        
        //Testimonial 5
        $testimonial5content = (empty($PAGE->theme->settings->testimonial5content)) ? false : format_text($PAGE->theme->settings->testimonial5content);
        $testimonial5image = (empty($PAGE->theme->setting_file_url('testimonial5image', 'testimonial5image'))) ? false : $PAGE->theme->setting_file_url('testimonial5image', 'testimonial5image');
        $testimonial5name = (empty($PAGE->theme->settings->testimonial5name)) ? false : format_text($PAGE->theme->settings->testimonial5name);
        $testimonial5meta = (empty($PAGE->theme->settings->testimonial5meta)) ? false : format_text($PAGE->theme->settings->testimonial5meta);
        
        //Testimonial 6
        $testimonial6content = (empty($PAGE->theme->settings->testimonial6content)) ? false : format_text($PAGE->theme->settings->testimonial6content);
        $testimonial6image = (empty($PAGE->theme->setting_file_url('testimonial6image', 'testimonial6image'))) ? false : $PAGE->theme->setting_file_url('testimonial6image', 'testimonial6image');
        $testimonial6name = (empty($PAGE->theme->settings->testimonial6name)) ? false : format_text($PAGE->theme->settings->testimonial6name);
        $testimonial6meta = (empty($PAGE->theme->settings->testimonial6meta)) ? false : format_text($PAGE->theme->settings->testimonial6meta);
       
        $fp_testimonials = [

        'usetestimonials' => $usetestimonials,

        'defaultimage' => $defaultimage,
        
        
        'testimonials' => array(
	        
            array(
	            'itemclass' => 'active',
                'hastestimonial' => $testimonial1content,
                'testimonial' => $testimonial1content,
                'testimonialimage' => $testimonial1image,
                'testimonialname' => $testimonial1name,
                'testimonialmeta' => $testimonial1meta,
            ),    
            
            array(
	            'itemclass' => '',
                'hastestimonial' => $testimonial2content,
                'testimonial' => $testimonial2content,
                'testimonialimage' => $testimonial2image,
                'testimonialname' => $testimonial2name,
                'testimonialmeta' => $testimonial2meta,
            ),   
            
            array(
	            'itemclass' => '',
	            'indicatorcount' => '2',
                'hastestimonial' => $testimonial3content,
                'testimonial' => $testimonial3content,
                'testimonialimage' => $testimonial3image,
                'testimonialname' => $testimonial3name,
                'testimonialmeta' => $testimonial3meta,
            ),  
            
            array(
	            'itemclass' => '',
	            'indicatorcount' => '3',
                'hastestimonial' => $testimonial4content,
                'testimonial' => $testimonial4content,
                'testimonialimage' => $testimonial4image,
                'testimonialname' => $testimonial4name,
                'testimonialmeta' => $testimonial4meta,
            ),  
            
            array(
	            'itemclass' => '',
	            'indicatorcount' => '4',
                'hastestimonial' => $testimonial5content,
                'testimonial' => $testimonial5content,
                'testimonialimage' => $testimonial5image,
                'testimonialname' => $testimonial5name,
                'testimonialmeta' => $testimonial5meta,
            ),  
            
            array(
	            'itemclass' => '',
	            'indicatorcount' => '5',
                'hastestimonial' => $testimonial6content,
                'testimonial' => $testimonial6content,
                'testimonialimage' => $testimonial6image,
                'testimonialname' => $testimonial6name,
                'testimonialmeta' => $testimonial6meta,
            ),  
              
        ),

        ];

        return $this->render_from_template('theme_gourmet_boost/fp_testimonials', $fp_testimonials);
    }
    
    
      
    public function fp_ctasection() {
        global $PAGE;
        
        $usectasection = $PAGE->theme->settings->usectasection == 1;
        $ctasectiontitle = (empty($PAGE->theme->settings->ctasectiontitle)) ? false : format_text($PAGE->theme->settings->ctasectiontitle);
        $ctasectioncontent = (empty($PAGE->theme->settings->ctasectioncontent)) ? false : format_text($PAGE->theme->settings->ctasectioncontent);
        $ctasectionbuttontext = (empty($PAGE->theme->settings->ctasectionbuttontext)) ? false : format_text($PAGE->theme->settings->ctasectionbuttontext);
        $ctasectionbuttonurl = (empty($PAGE->theme->settings->ctasectionbuttonurl)) ? false : $PAGE->theme->settings->ctasectionbuttonurl;
        $ctasectionbuttonurlopennew = $PAGE->theme->settings->ctasectionbuttonurlopennew== 1;

        $fp_ctasection = [
        
            'hasctasection' => $usectasection, 
            'ctatitle' => $ctasectiontitle, 
            'ctacontent' => $ctasectioncontent, 
            'hasctabutton' => ($ctasectionbuttontext && $ctasectionbuttonurl) ? true : false,
            'ctabutton' => $ctasectionbuttontext,
            'ctaurl' => $ctasectionbuttonurl,
            'urlopennew' => $ctasectionbuttonurlopennew,

        ];

        return $this->render_from_template('theme_gourmet_boost/fp_ctasection', $fp_ctasection);
    }
    
      
    public function footer_blocks() {
        global $PAGE;

        $usefooterblocks = $PAGE->theme->settings->usefooterblocks == 1;

        
        //Blocks
        $footerblock1 = (empty($PAGE->theme->settings->footerblock1)) ? false : format_text($PAGE->theme->settings->footerblock1);
        $footerblock2 = (empty($PAGE->theme->settings->footerblock2)) ? false : format_text($PAGE->theme->settings->footerblock2);
        $footerblock3 = (empty($PAGE->theme->settings->footerblock3)) ? false : format_text($PAGE->theme->settings->footerblock3);
        
        
              
        $footer_blocks = [

        'usefooterblocks' => $usefooterblocks,
        
        
        'footerblocks' => array(
	        
            array(
	            'blockgrid' => 'col-md-3 col-xs-12',
                'hasblock' => $footerblock1,
                'blockcontent' => $footerblock1,
            ), 
            array(
	            'blockgrid' => 'col-md-6 col-xs-12',
                'hasblock' => $footerblock2,
                'blockcontent' => $footerblock2,
            ),    
            
            array(
	            'blockgrid' => 'col-md-3 col-xs-12',
                'hasblock' => $footerblock3,
                'blockcontent' => $footerblock3,
            ),    
              

        ),

        ];

        return $this->render_from_template('theme_gourmet_boost/footer_blocks', $footer_blocks);
    }
    
    
    public function footer_widget() {
        global $PAGE;
        
        $footerwidget = (empty($PAGE->theme->settings->footerwidget)) ? false : format_text($PAGE->theme->settings->footerwidget);
        
        $footer_widget = [
	        'footerwidgetcontent' => $footerwidget,
	        
        ];
        
        
        return $this->render_from_template('theme_gourmet_boost/footer_widget', $footer_widget);
    }
    
   
    
     public function footer_copyright() {
	     
        global $PAGE;
        
        $setting = $PAGE->theme->settings->copyright;
        
        return $setting != '' ? $setting : '';
        
    }
    
    

   

}
