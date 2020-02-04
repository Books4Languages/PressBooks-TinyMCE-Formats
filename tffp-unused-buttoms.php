<?php
/**
 * Summary (no period for file headers)
 *
 * Description. (use period)
 *
 * @link URL
 *
 * @package tffp
 * @subpackage unused-buttoms
 * @since 2.0
 *
 */



/**
 * Removes buttons from the first row of the tiny mce editor
 *
 * @link     http://thestizmedia.com/remove-buttons-items-wordpress-tinymce-editor/
 *
 * @since 2.0
 *
 * @param    array    $buttons    The default array of buttons
 * @return   array                The updated array of buttons that exludes some items
 */
add_filter( 'mce_buttons', 'jivedig_remove_tiny_mce_buttons_from_editor');
function jivedig_remove_tiny_mce_buttons_from_editor( $buttons ) {

    $remove_buttons = array(
    //    'bold',
    //    'italic',
    //    'strikethrough',
    //    'bullist',
    //    'numlist',
        'blockquote',
        'hr', // horizontal line
        'alignleft',
        'aligncenter',
        'alignright',
    //    'link',
    //    'unlink',
        'wp_more', // read more link
    //    'spellchecker',
        'dfw', // distraction free writing mode
    //    'wp_adv', // kitchen sink toggle (if removed, kitchen sink will always display)
    );
    foreach ( $buttons as $button_key => $button_value ) {
        if ( in_array( $button_value, $remove_buttons ) ) {
            unset( $buttons[ $button_key ] );
        }
    }
    return $buttons;
}

/**
 * Removes buttons from the second row (kitchen sink) of the tiny mce editor
 *
 * @link     http://thestizmedia.com/remove-buttons-items-wordpress-tinymce-editor/
 *
 * @since 2.0
 *
 * @param    array    $buttons    The default array of buttons in the kitchen sink
 * @return   array                The updated array of buttons that exludes some items
 */
add_filter( 'mce_buttons_2', 'jivedig_remove_tiny_mce_buttons_from_kitchen_sink');
function jivedig_remove_tiny_mce_buttons_from_kitchen_sink( $buttons ) {

    $remove_buttons = array(
    //    'formatselect', // format dropdown menu for <p>, headings, etc
        'underline',
        'alignjustify',
    //    'forecolor', // text color
    //    'pastetext', // paste as text
    //    'removeformat', // clear formatting
    //    'charmap', // special characters
        'outdent',
        'indent',
    //    'undo',
    //    'redo',
    //    'wp_help', // keyboard shortcuts
    );
    foreach ( $buttons as $button_key => $button_value ) {
        if ( in_array( $button_value, $remove_buttons ) ) {
            unset( $buttons[ $button_key ] );
        }
    }
    return $buttons;
}


/**
 * tiny mce editor new options by PressBooks
 *
 * @link https://github.com/pressbooks/pressbooks/blob/5ce6821aac075f287710fa35cdb1e00dfa449f33/inc/editor/namespace.php
 *
 *  'footnote',
 *  'ftnref_convert',
 *  'glossary',
 *  'glossary_all',
 *  'wp_code',
 *  'anchor',
 *  'apply_class',
 *  'superscript',
 *  'subscript',
 */
