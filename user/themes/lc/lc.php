<?php
namespace Grav\Theme;

use Grav\Common\Theme;

class Lc extends Theme
{
    // Access plugin events in this class
    // https://discourse.getgrav.org/t/conditional-field-creating-a-flexible-content-field-like-advanced-custom-fields-wordpress-plugin/7293/2
    public function onAssetsInitialized() {
        // if ($this->isAdmin()) {

        //     // add JS
        //     $this->grav['assets']->addJs('theme://js/admin.js');
        //     // add CSS
        //     $this->grav['assets']->addCss('theme://css/admin.css');

        // }
    }
}
