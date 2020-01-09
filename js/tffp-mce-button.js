//  File Javascript that prints the boxes in the editor

// Function that add choises to the dropdown menu and print the choosen class.
(function() {
        tinymce.PluginManager.add('wdm_mce_button', function( editor, url ) {
           editor.addButton( 'wdm_mce_button', {
                 text: 'Educational Formats',
                 icon: false,
                 type: 'menubutton',
                 menu: [
                       {
                        text: 'Introduction',
                        onclick: function() {
                          editor.insertContent("<div class='textbox textbox--introduction'><header class='textbox__header'><h2 class='textbox__title'>Introduction</h2></header><div class='textbox__content'>Type your introduction here.<ul><li>First</li><li>Second</li></ul></div></div>");
                          }
                        },
                        {
                        text: 'Form',
                        onclick: function() {
                        editor.insertContent("<div class='textbox textbox--form'><header class='textbox__header'><h2 class='textbox__title'>Form</h2></header><div class='textbox__content'>Type your form here.<ul><li>First</li><li>Second</li></ul></div></div>");
                          }
                        },
                        {
                        text: 'Example',
                        onclick: function() {
                        editor.insertContent("<div class='textbox textbox--example'><header class='textbox__header'><h2 class='textbox__title'>Example</h2></header><div class='textbox__content'>Type your example here.<ul><li>First</li><li>Second</li></ul></div></div>");
                          }
                        },
                        {
                        text: 'Use',
                        onclick: function() {
                        editor.insertContent("<div class='textbox textbox--use'><header class='textbox__header'><h2 class='textbox__title'>Use</h2></header><div class='textbox__content'>Type your use here.<ul><li>First</li><li>Second</li></ul></div></div>");
                          }
                        },
                        {
                        text: 'Summary',
                        onclick: function() {
                        editor.insertContent("<div class='textbox textbox--summary'><header class='textbox__header'><h2 class='textbox__title'>Summary</h2></header><div class='textbox__content'>Type your summary here.<ul><li>First</li><li>Second</li></ul></div></div>");
                          }
                        },
                        {
                        text: 'Exercise',
                        onclick: function() {
                        editor.insertContent("<div class='textbox textbox--exercise'><header class='textbox__header'><h2 class='textbox__title'>Exercise</h2></header><div class='textbox__content'>Type your exercise here.<ul><li>First</li><li>Second</li></ul></div></div>");
                          }
                        },
                        {
                        text: 'Activity',
                        onclick: function() {
                        editor.insertContent("<div class='textbox textbox--activity'><header class='textbox__header'><h2 class='textbox__title'>Activity</h2></header><div class='textbox__content'>Type your activity here.<ul><li>First</li><li>Second</li></ul></div></div>");
                          }
                        },
                        {
                        text: 'Task',
                        onclick: function() {
                        editor.insertContent("<div class='textbox textbox--task'><header class='textbox__header'><h2 class='textbox__title'>Task</h2></header><div class='textbox__content'>Type your task here.<ul><li>First</li><li>Second</li></ul></div></div>");
                          }
                        }
                       ]
              });
        });
})();
