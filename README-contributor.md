# How to contribute and extend this plugin

## Formats

In order to add a new format, open `admin/class-tinymce-dimension-admin.php` and
add your format definition in the `add_mce_styles` method. Examples are given to
make this easier.

You may need to adapt the styles for your formats to be correctly displayed.
To proceed, open `public/css/tinymce-dimension-public.css`, and add the relevant
rules. You should use classes in the format definition, in order to simplify
“catching” in the CSS file.

## Link to the current box

The code generating links to the boxes is located in
`public/js/tinymce-dimension-public.js`.
