<?php

namespace myblog\controllers;

abstract class Controller
{
    abstract public function runAction($action);

    public function render($template, $params = []){
        return $this->renderTemplate('layout\main', [
            'title' => $params['title'],
            'header' => $this->renderTemplate('layout\header', [
                'menu' => $this->renderTemplate('layout\menu')
            ]),
            'content' => $this->renderTemplate($template, $params),
            'recommendation' => $this->renderTemplate('components/recommendation', [
                'heading' => 'Featured Stories',
                'description' => 'Did you read our personal favorites?'
            ]),
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