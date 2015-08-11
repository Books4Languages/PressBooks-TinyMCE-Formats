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

## Restrictet boxes

### Change the Restricted subscription, level and more

Each format can be a box with specific content inside of it. In order to add a new rule for restric the acces to the boxes (by default it aply just [restrict]), open `public/class-tinymce-formats-public.php` and add your new rule. Example of rule of subscritpion id 1 in the box:  `if( rcp_is_active() && 1 == rcp_get_subscription_id() )`


### Add a new format with restricted content
Open `public/js` and copy and paste one of the files with the name of the format `public/js/tinymce-formats-restrict-introduction.js`



You may need to add new formats/boxes to the file. Change the xxxxx for a new number (do not repeat a number) $this->plugin_name.'xxxx', and also change the yyyy in the name of the Javascript file for the name of the format 'js/tinymce-formats-restrict-yyyy.js'.

Examples are given.



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
