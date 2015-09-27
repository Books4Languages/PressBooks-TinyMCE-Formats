jQuery(document).ready(function ($) {
    'use strict';
    $('body').on('click', 'a#copyLink', function (e) {
        e.preventDefault();

        var $div = $('<div id="dialog-form"><br/><form><label for="info">Hit CTRL + C to copy!</label><br/><label for="name">You can copy the link to this element from the box below!</label><br/><br/><input style="width: 100%;" type="text" value="'
        + $(this).attr('href') + '" name="name" id="copylinkinput" class="text ui-widget-content ui-corner-all" /></form></div>');

        //$div.attr('id', 'holdy');

        var opt = {
            autoOpen: false,
            modal: true,
            title: 'Link',
            buttons: {
                "Ok": function () {

                    $(this).dialog("close");
                }
            }
        };

        $div.dialog(opt).dialog("open");
        
        $div.find('input').select();
    });



    
});