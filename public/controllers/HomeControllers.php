<?php

namespace myblog\controllers;

class HomeControllers extends Controller
{
    private string $action;
    private string $defaultAction = 'index';

    public function runAction($action) {
        $this->action = $action ?: $this->defaultAction;
        $method = $this->action . "Action";
        if(method_exists($this, $method)){
            $this->$method();
        }else{
            echo "Ошибка 404. Данного метода не существует";
            die();
        }

    }

    public function IndexAction() {
        echo $this->render('home', [
            'title' => "Домашняя страница"
        ]);
    }

}