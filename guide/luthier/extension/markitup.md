# The markItUp Markup Editor

The [markItUp](http://markitup.jaysalvat.com/home) editor
enables markup editing of text much like a rich text editor.
The Luthier-markItUp extension provides support for markItUp
editor integration with Luthier layouts.

## Incorporating the markItUp Editor

To use the markItUp markup editor in place of a plain textarea
in a form, create a Kostache view extending `View_Luthier_Editor`
(i.e., rather than `View_Luthier_Form`). This view class adds all
necessary CSS stylesheets and JavaScript files to the layout view's
styles and scripts arrays prior to rendering.

    class View_Article_Form extends View_Luthier_Editor {

        /**
         * Supply form fields, including at least one
         * textarea input field
         */
        public function fields() {
            return array(
                array(
                    'label' => 'Text',
                    'field' => 'text',
                    'input' => Form::textarea('text'),
                ),
            );
        }

    }

## Using a Different Markup Set

In order to use a different markup set than the default set (html, markdown,
etc.), download the markup set from the
[markItUp website](http://markitup.jaysalvat.com/downloads), place it somewhere
accessible to the `luthier/media` route/controller, and add the following lines
to the `APPPATH/config/luthier.php` config file:

    return array(
        'markitup' => array(
            'style'    => 'relative/path/to/set/style.css',
            'settings' => 'relative/path/to/set.js',
        ),
    );

# Using a Different Editor Skin

By default, the editor will use the simple skin provided by markItUp. If a
different editor skin is desired (e.g., the stock markitup skin), add the
following lines to the `APPPATH/config/luthier.php` config file:

    return array(
        'markitup' => array(
            'skin' => 'relative/path/to/skin/style.css',
        ),
    );

To enable the stock markitup skin that ships with markItUp, the skin path
would be `markitup/src/markitup/skins/markitup/style.css`.

