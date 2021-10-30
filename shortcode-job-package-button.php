<?php

/* Only works when setting "Choose a package before entering job details" is enabled */

function wpfr_add_job_package_button ( $atts = array() ) { 

    extract(shortcode_atts(array(
        'id' => '',
        'text' => 'Book a job now',
        'div_class' => '',
        'button_class' => ''
       ), $atts));

    return "<div class=\"$div_class\"><form method=\"post\" id=\"job_package_selection\" action=\"/post-a-job\">
    <input type=\"hidden\" name=\"job_id\" value=\"0\" />
    <input type=\"hidden\" name=\"step\" value=\"0\" />
    <input type=\"hidden\" name=\"job_manager_form\" value=\"submit-job\" />
    
    <button class=\"$button_class\" type=\"submit\" name=\"job_package\" value=\"$id\" id=\"package-$id\">$text</button>
    </form></div>";
} 

add_shortcode('job_package_button', 'wpfr_add_job_package_button'); 