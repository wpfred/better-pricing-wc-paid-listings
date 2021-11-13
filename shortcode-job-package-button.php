<?php

function wpfr_add_job_package_button ( $atts = array() ) { 

    extract(shortcode_atts(array(
        'id' => '',
        'text' => 'Book a job now',
        'url' => '/post-a-job',
        'div_class' => '',
        'button_class' => ''
       ), $atts));

    return '<div class="' . esc_attr($div_class) . '"><form method="post" id="job_package_selection" action="' . esc_attr($url) . '">
    <input type="hidden" name="job_id" value="0" />
    <input type="hidden" name="step" value="0" />
    <input type="hidden" name="job_manager_form" value="submit-job" />
    
    <button class="' . esc_attr($button_class) . '" type="submit" name="job_package" value="' . esc_attr($id) . '" id="package-' . esc_attr($id) . '">' . esc_attr($text) . '</button>
    </form></div>';
} 

add_shortcode('job_package_button', 'wpfr_add_job_package_button'); 