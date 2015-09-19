# How to contribute and extend this plugin

## Formats

In order to add a new format, open `admin/class-tinymce-formats-admin.php` and
add your format definition in the `add_mce_styles` method. Examples are given to
make this easier.

You may need to adapt the styles for your formats to be correctly displayed.
To proceed, open `public/css/tinymce-formats-public.css`, and add the relevant
rules. You should use classes in the format definition, in order to simplify
“catching” in the CSS file.

## Link to the current box

The code generating links to the boxes is located in
`public/js/tinymce-formats-public.js`.

## Version

To update plugin version, change it in:
* `README.txt`: `Stable tag:`
* `tinymce-formats`: `Version:`
* `includes/class-tinymce-formats.php`: `$this->version =` (in `__construct`)
  method.

Update the *Changelog* section of `README.md` and `README.txt` with the changes
you made to the plugin.

Do not forget to add a tag named after the new version in the repository (after
having done and committed changes listed above).
