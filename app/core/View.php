<?php

namespace core;

/**
 * Description of View
 *
 * @author Admin
 */
class View {

    public function render($content_view, $template_view = 'template_main_view') {
        include_once ROOT . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $template_view . '.php';
    }

}
