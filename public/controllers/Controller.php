<?php

namespace myblog\controllers;

class Controller

{
    public function render($template, $params = []){
        return $this->renderTemplate('layout\main', [
            'title' => $params['title'],
            'header' => $this->renderTemplate('layout\header'),
            'content' => $this->renderTemplate($template, $params),
            'footer' => $this->renderTemplate('layout\footer')
        ]);

    }

    public function renderTemplate($template, $params = []) {
        ob_start();

        extract($params);

        include VIEWS_DIR . $template . ".php";

        return ob_get_clean();
    }
}