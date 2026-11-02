<?php
/**
 * Mariia Sharlai theme.
 *
 * Standalone theme for dance.sharlai.com. Not a Hello Elementor child.
 * Do not put DanceDaily in the logo.
 */

if (!defined('ABSPATH')) {
    exit;
}

define('MS_THEME_VERSION', '1.0.0');

/**
 * Existing Contact Form 7 posts on the live site.
 * Hashes are optional fallbacks if numeric lookup fails on newer CF7.
 */
function ms_cf7_shortcode($which) {
    $forms = array(
        'mini' => array('id' => '1029', 'hash' => '6a477c7', 'title' => 'Mini Dance'),
        'kids' => array('id' => '687', 'hash' => '25256de', 'title' => 'Commercial Dance for Kids'),
        'kpop' => array('id' => '1031', 'hash' => '2e1fedb', 'title' => 'K-Pop Beginners and Intensive'),
    );
    if (!isset($forms[$which])) {
        return '';
    }
    $form = $forms[$which];
    return sprintf(
        '[contact-form-7 id="%s" title="%s"]',
        esc_attr($form['id']),
        esc_attr($form['title'])
    );
}

function ms_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('automatic-feed-links');
    register_nav_menus(array(
        'primary' => __('Primary', 'mariia-sharlai'),
    ));
}
add_action('after_setup_theme', 'ms_setup');

function ms_enqueue() {
    wp_enqueue_style(
        'mariia-sharlai-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;1,400;1,500&family=Montserrat:wght@300;400;500&display=swap',
        array(),
        null
    );
    wp_enqueue_style(
        'mariia-sharlai',
        get_template_directory_uri() . '/assets/css/theme.css',
        array('mariia-sharlai-fonts'),
        MS_THEME_VERSION
    );
    wp_enqueue_script(
        'mariia-sharlai',
        get_template_directory_uri() . '/assets/js/theme.js',
        array(),
        MS_THEME_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'ms_enqueue');

function ms_is_english() {
    if (function_exists('pll_current_language')) {
        return pll_current_language() === 'en';
    }
    $locale = get_locale();
    return (strpos($locale, 'en') === 0);
}

function ms_is_launch_page() {
    if (is_front_page() && ms_is_english()) {
        return true;
    }
    if (is_page(array('mini-dance', 'commercial-dance-for-kids', 'k-pop-course'))) {
        return true;
    }
    return false;
}

/**
 * Keep Elementor from replacing the four launch templates.
 */
function ms_force_templates($template) {
    $dir = get_template_directory();
    if (is_front_page() && ms_is_english()) {
        return $dir . '/front-page.php';
    }
    if (is_page('mini-dance')) {
        return $dir . '/page-mini-dance.php';
    }
    if (is_page('commercial-dance-for-kids')) {
        return $dir . '/page-commercial-dance-for-kids.php';
    }
    if (is_page('k-pop-course')) {
        return $dir . '/page-k-pop-course.php';
    }
    return $template;
}
add_filter('template_include', 'ms_force_templates', 99);

function ms_dequeue_builder_chrome() {
    if (!ms_is_launch_page()) {
        return;
    }
    wp_dequeue_style('elementor-frontend');
    wp_dequeue_style('elementor-post');
    wp_dequeue_style('hello-elementor');
    wp_dequeue_style('hello-elementor-theme-style');
}
add_action('wp_enqueue_scripts', 'ms_dequeue_builder_chrome', 100);

function ms_url($path = '/') {
    return home_url($path);
}

function ms_photo_path($slot) {
    $dir = get_template_directory() . '/assets/photos/';
    foreach (array('webp', 'jpg', 'jpeg', 'png') as $ext) {
        $file = $dir . $slot . '.' . $ext;
        if (is_readable($file)) {
            return array(
                'path' => $file,
                'url'  => get_template_directory_uri() . '/assets/photos/' . $slot . '.' . $ext,
            );
        }
    }
    return null;
}

function ms_photo($args) {
    $slot   = isset($args['slot']) ? $args['slot'] : '';
    $ph     = isset($args['ph']) ? $args['ph'] : 'ph-1';
    $ratio  = isset($args['ratio']) ? $args['ratio'] : 'ratio-16x9';
    $label  = isset($args['label']) ? $args['label'] : 'Photo to add';
    $alt    = isset($args['alt']) ? $args['alt'] : '';
    $chip   = isset($args['chip']) ? $args['chip'] : '';
    $mute   = !empty($args['mute']);
    $radius = !empty($args['round']);
    $found  = $slot ? ms_photo_path($slot) : null;
    $class  = 'ph ' . $ph . ' ' . $ratio . ($found ? ' has-photo' : '') . ($radius ? ' round' : '');
    echo '<div class="' . esc_attr($class) . '" role="img" aria-label="' . esc_attr($label) . '">';
    if ($found) {
        printf(
            '<img src="%s" alt="%s" loading="%s">',
            esc_url($found['url']),
            esc_attr($alt !== '' ? $alt : $label),
            empty($args['priority']) ? 'lazy' : 'eager'
        );
    } else {
        echo '<span class="ph-tag">Photo to add</span>';
    }
    if ($chip !== '') {
        echo '<span class="chip' . ($mute ? ' mute' : '') . ' ph-chip"><i></i>' . esc_html($chip) . '</span>';
    }
    echo '</div>';
}

function ms_icon($name) {
    if ($name === 'logo') {
        return '<svg width="28" height="28" viewBox="0 0 28 28" fill="none" stroke="#F3F4F6" stroke-width="1.25" aria-hidden="true"><circle cx="14" cy="14" r="12.5"></circle><path d="M8 17c3-7 9-7 12-1" stroke-linecap="round"></path></svg>';
    }
    if ($name === 'arrow') {
        return '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4"></path></svg>';
    }
    if ($name === 'chevron') {
        return '<svg width="12" height="12" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2.5 4.5L6 8l3.5-3.5"></path></svg>';
    }
    if ($name === 'plus') {
        return '<svg class="plus" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" aria-hidden="true"><path d="M10 4v12M4 10h12"></path></svg>';
    }
    if ($name === 'close') {
        return '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" aria-hidden="true"><path d="M4 4l8 8M12 4l-8 8"></path></svg>';
    }
    if ($name === 'menu') {
        return '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" aria-hidden="true"><path d="M4 6h12M4 10h12M4 14h12"></path></svg>';
    }
    return '';
}

function ms_faq_item($question, $answer, $open = false) {
    echo '<details class="faq"' . ($open ? ' open' : '') . '>';
    echo '<summary>' . esc_html($question) . ms_icon('plus') . '</summary>';
    echo '<p>' . esc_html($answer) . '</p>';
    echo '</details>';
}

function ms_enrollment_steps($context = 'shared') {
    $steps = array(
        array(
            '01',
            'Register',
            'Fill in the form. Registration is free and has no payment obligation.',
        ),
        array(
            '02',
            'First class',
            $context === 'mini'
                ? 'The new Mini group has an official free trial class on Saturday 16 January. Time is still to be confirmed.'
                : 'The semester starts on Saturday 16 January, Wednesday classes begin on 20 January. The first class is free if you decide not to continue, and part of the course if you join.',
        ),
        array(
            '03',
            'Confirm joining',
            $context === 'mini'
                ? 'After the trial class you decide. Joining means registering for the whole semester, paid in two equal instalments. The group opens when at least 5 children confirm, and I announce the decision on Friday.'
                : 'After the first class you decide. Joining means registering for the whole semester, paid in two equal instalments.',
        ),
        array(
            '04',
            'Invoice and start',
            'The first invoice (50%) comes after you confirm, the second (50%) in the middle of the semester.',
        ),
    );
    echo '<div class="grid-4 mt-48">';
    foreach ($steps as $step) {
        echo '<article class="card1" style="padding:32px;display:flex;flex-direction:column;gap:16px">';
        echo '<span class="stepn">' . esc_html($step[0]) . '</span>';
        echo '<h3 class="h" style="font-size:24px;line-height:1.25">' . esc_html($step[1]) . '</h3>';
        echo '<p class="sub" style="font-size:16px">' . esc_html($step[2]) . '</p>';
        echo '</article>';
    }
    echo '</div>';
}

function ms_form($which) {
    echo '<div id="form" class="form-panel">';
    if (shortcode_exists('contact-form-7')) {
        echo do_shortcode(ms_cf7_shortcode($which));
    } else {
        echo '<p class="form-fallback">The registration form loads here from Contact Form 7 (form ' . esc_html($which === 'mini' ? '1029' : ($which === 'kids' ? '687' : '1031')) . '). Activate Contact Form 7 on the live WordPress site.</p>';
    }
    echo '</div>';
}

function ms_event_schema($events) {
    $out = array();
    foreach ($events as $event) {
        $item = array(
            '@context' => 'https://schema.org',
            '@type' => 'Event',
            'name' => $event['name'],
            'eventAttendanceMode' => 'https://schema.org/OfflineEventAttendanceMode',
            'eventStatus' => 'https://schema.org/EventScheduled',
            'location' => array(
                '@type' => 'Place',
                'name' => 'DanceDaily',
                'address' => array(
                    '@type' => 'PostalAddress',
                    'streetAddress' => 'Satakunnankatu 29',
                    'addressLocality' => 'Tampere',
                    'postalCode' => '33210',
                    'addressCountry' => 'FI',
                ),
            ),
            'offers' => array(
                '@type' => 'Offer',
                'price' => '0',
                'priceCurrency' => 'EUR',
                'availability' => 'https://schema.org/InStock',
            ),
            'organizer' => array(
                '@type' => 'Person',
                'name' => 'Mariia Sharlai',
            ),
        );
        if (!empty($event['start'])) {
            $item['startDate'] = $event['start'];
        }
        if (!empty($event['description'])) {
            $item['description'] = $event['description'];
        }
        $out[] = $item;
    }
    echo '<script type="application/ld+json">' . wp_json_encode($out, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
}

function ms_date_pills($dates) {
    echo '<div class="dates">';
    $first = true;
    foreach ($dates as $date) {
        echo '<span class="dc' . ($first ? ' first' : '') . '">' . esc_html($date) . '</span>';
        $first = false;
    }
    echo '</div>';
}

function ms_saturday_dates() {
    return array('16 Jan', '23 Jan', '30 Jan', '6 Feb', '13 Feb', '20 Feb', '27 Feb', '6 Mar', '13 Mar', '20 Mar', '3 Apr', '10 Apr', '17 Apr', '24 Apr', '8 May', '15 May');
}

function ms_wednesday_dates() {
    return array('20 Jan', '27 Jan', '3 Feb', '10 Feb', '17 Feb', '24 Feb', '10 Mar', '17 Mar', '24 Mar', '31 Mar', '7 Apr', '14 Apr', '21 Apr', '28 Apr', '5 May', '12 May');
}
