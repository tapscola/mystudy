<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

defined('MOODLE_INTERNAL') || die();


/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */

function theme_gourmet_boost_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    static $theme;
    if (empty($theme)) {
        $theme = theme_config::load('gourmet_boost');
    }
    if ($context->contextlevel == CONTEXT_SYSTEM && ($filearea === '')) {
        $theme = theme_config::load('gourmet_boost');
        return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
    } else if ($filearea === 'logo') {
        return $theme->setting_file_serve('logo', $args, $forcedownload, $options);
    } else if ($filearea === 'slide1image') {
        return $theme->setting_file_serve('slide1image', $args, $forcedownload, $options);
    } else if ($filearea === 'slide2image') {
        return $theme->setting_file_serve('slide2image', $args, $forcedownload, $options);
    } else if ($filearea === 'slide3image') {
        return $theme->setting_file_serve('slide3image', $args, $forcedownload, $options);
    } else if ($filearea === 'slide4image') {
        return $theme->setting_file_serve('slide4image', $args, $forcedownload, $options);
    } else if ($filearea === 'slide5image') {
        return $theme->setting_file_serve('slide5image', $args, $forcedownload, $options);
    } else if ($filearea === 'slide6image') {
	    return $theme->setting_file_serve('slide6image', $args, $forcedownload, $options);
    } else if ($filearea === 'homeblock1image') {
        return $theme->setting_file_serve('homeblock1image', $args, $forcedownload, $options);
    } else if ($filearea === 'homeblock2image') {
        return $theme->setting_file_serve('homeblock2image', $args, $forcedownload, $options);
    } else if ($filearea === 'homeblock3image') {
        return $theme->setting_file_serve('homeblock3image', $args, $forcedownload, $options);
    } else if ($filearea === 'homeblock4image') {
        return $theme->setting_file_serve('homeblock4image', $args, $forcedownload, $options);
    } else if ($filearea === 'homeblock5image') {
        return $theme->setting_file_serve('homeblock5image', $args, $forcedownload, $options);
    } else if ($filearea === 'homeblock6image') {
        return $theme->setting_file_serve('homeblock6image', $args, $forcedownload, $options);
    } else if ($filearea === 'logo1image') {
        return $theme->setting_file_serve('logo1image', $args, $forcedownload, $options);
    } else if ($filearea === 'logo2image') {
        return $theme->setting_file_serve('logo2image', $args, $forcedownload, $options);
    } else if ($filearea === 'logo3image') {
        return $theme->setting_file_serve('logo3image', $args, $forcedownload, $options);
    } else if ($filearea === 'logo4image') {
        return $theme->setting_file_serve('logo4image', $args, $forcedownload, $options);
    } else if ($filearea === 'logo5image') {
        return $theme->setting_file_serve('logo5image', $args, $forcedownload, $options);
    } else if ($filearea === 'logo6image') {
        return $theme->setting_file_serve('logo6image', $args, $forcedownload, $options);
    } else if ($filearea === 'testimonial1image') {
        return $theme->setting_file_serve('testimonial1image', $args, $forcedownload, $options);
    } else if ($filearea === 'testimonial2image') {
        return $theme->setting_file_serve('testimonial2image', $args, $forcedownload, $options);
    } else if ($filearea === 'testimonial3image') {
        return $theme->setting_file_serve('testimonial3image', $args, $forcedownload, $options);
    } else if ($filearea === 'testimonial4image') {
        return $theme->setting_file_serve('testimonial4image', $args, $forcedownload, $options);
    } else if ($filearea === 'testimonial5image') {
        return $theme->setting_file_serve('testimonial5image', $args, $forcedownload, $options);
    } else if ($filearea === 'testimonial6image') {
	    return $theme->setting_file_serve('testimonial6image', $args, $forcedownload, $options);
    } else {
        send_file_not_found();
    }
}



/**
 * Post process the CSS tree.
 *
 * @param string $tree The CSS tree.
 * @param theme_config $theme The theme config object.
 */
function theme_gourmet_boost_css_tree_post_processor($tree, $theme) {
    $prefixer = new theme_boost\autoprefixer($tree);
    $prefixer->prefix();
}

/**
 * Returns the main SCSS content.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */

function theme_gourmet_boost_get_main_scss_content($theme) {
    global $CFG;

    $scss = '';
    $filename = !empty($theme->settings->preset) ? $theme->settings->preset : null;
    $fs = get_file_storage();

    $context = context_system::instance();
    
    // Use Boost theme's default styling as the base
    //$scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');
    
    if ($filename == 'theme-1.scss') {
        $scss .= file_get_contents($CFG->dirroot . '/theme/gourmet_boost/scss/preset/theme-1.scss');
    } else if ($filename == 'theme-2.scss') {
        $scss .= file_get_contents($CFG->dirroot . '/theme/gourmet_boost/scss/preset/theme-2.scss');
    } else if ($filename == 'theme-3.scss') {
        $scss .= file_get_contents($CFG->dirroot . '/theme/gourmet_boost/scss/preset/theme-3.scss');
    } else if ($filename == 'theme-4.scss') {
        $scss .= file_get_contents($CFG->dirroot . '/theme/gourmet_boost/scss/preset/theme-4.scss');
    } else if ($filename && ($presetfile = $fs->get_file($context->id, 'theme_gourmet_boost', 'preset', 0, '/', $filename))) {
        $scss .= $presetfile->get_content();
    } else {
        // Safety fallback - maybe new installs etc.
        $scss .= file_get_contents($CFG->dirroot . '/theme/gourmet_boost/scss/preset/theme-1.scss');
    }

    return $scss;
}


/**
 * Get SCSS to prepend.
 *
 * @param theme_config $theme The theme config object.
 * @return array
 */
function theme_gourmet_boost_get_pre_scss($theme) {
    global $CFG, $PAGE;

    $prescss = '';
    
    
    
    
    $configurable = [
    // Config key => variableName,
    'brandcolorprimary' => ['theme-color-primary'],

    ];

    // Add settings variables.
    foreach ($configurable as $configkey => $targets) {
        $value = $theme->settings->{$configkey};
        if (empty($value)) {
            continue;
        }
        array_map(function ($target) use (&$prescss, $value) {
            $prescss .= '$' . $target . ': ' . $value . ";\n";
        }
        , (array)$targets);
    }
    
    
    

    // Prepend pre-scss.
    if (!empty($theme->settings->scsspre)) {
        $prescss .= $theme->settings->scsspre;
    }
    
    
       
        
    // Login Page Logo Image
    
    $sitelogo = $theme->setting_file_url('logo', 'logo');
    if (isset($sitelogo)) {
        
        $prescss .= '.has-logo .login-sitename a {text-indent: -99999px; display: block; height: 40px; background-image: url("' . $sitelogo . '"); background-repeat: no-repeat; background-position: center center; background-size: contain; margin-bottom:15px;}';
        

    }

    return $prescss;

}





/**
 * Inject additional SCSS.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_gourmet_boost_get_extra_scss($theme) {
    // Adapted from Boost to allow other changes or settings if required.
    $extrascss = '';
    if (!empty($theme->settings->scss)) {
        $extrascss .= $theme->settings->scss;
    }

    return $extrascss;
}



function theme_gourmet_boost_get_course_activities() {
    GLOBAL $CFG, $PAGE, $OUTPUT;
    // A copy of block_activity_modules.
    $course = $PAGE->course;
    $content = new stdClass();
    $modinfo = get_fast_modinfo($course);
    $modfullnames = array();

    $archetypes = array();

    foreach ($modinfo->cms as $cm) {
        // Exclude activities which are not visible or have no link (=label).
        if (!$cm->uservisible or !$cm->has_view()) {
            continue;
        }
        if (array_key_exists($cm->modname, $modfullnames)) {
            continue;
        }
        if (!array_key_exists($cm->modname, $archetypes)) {
            $archetypes[$cm->modname] = plugin_supports('mod', $cm->modname, FEATURE_MOD_ARCHETYPE, MOD_ARCHETYPE_OTHER);
        }
        if ($archetypes[$cm->modname] == MOD_ARCHETYPE_RESOURCE) {
            if (!array_key_exists('resources', $modfullnames)) {
                $modfullnames['resources'] = get_string('resources');
            }
        } else {
            $modfullnames[$cm->modname] = $cm->modplural;
        }
    }
    core_collator::asort($modfullnames);

    return $modfullnames;
}

/**
 * This function creates the dynamic HTML needed for some
 * settings and then passes it back in an object so it can
 * be echo'd to the page.
 *
 */

function theme_gourmet_boost_get_setting($setting, $format = false) {
    global $CFG;
    require_once($CFG->dirroot . '/lib/weblib.php');
    static $theme;
    if (empty($theme)) {
        $theme = theme_config::load('gourmet_boost');
    }
    if (empty($theme->settings->$setting)) {
        return false;
    } else if (!$format) {
        return $theme->settings->$setting;
    } else if ($format === 'format_text') {
        return format_text($theme->settings->$setting, FORMAT_PLAIN);
    } else if ($format === 'format_html') {
        return format_text($theme->settings->$setting, FORMAT_HTML, array('trusted' => true, 'noclean' => true));
    } else {
        return format_string($theme->settings->$setting);
    }
}

