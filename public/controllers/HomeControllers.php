<?php

namespace myblog\controllers;

class HomeControllers extends Controller
{
    private string $action;
    private string $defaultAction = 'index';

    public function runAction($action) {
        $this->action = $action ?: $this->defaultAction;
        $method = $this->action . "Action";
        $this->$method();
    }

    public function IndexAction() {
        echo $this->render('home');
    }

}