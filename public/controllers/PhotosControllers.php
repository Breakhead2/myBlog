<?php

namespace myblog\controllers;

class PhotosControllers extends Controller
{
    private string $action;
    private string $defaultAction = 'index';

    public function runAction($action)
    {
        $this->action = $action ?: $this->defaultAction;
        $method = $this->action . "Action";
        if(method_exists($this, $method)){
            $this->$method();
        }else{
            echo "Ошибка 404. Данного метода не существует";
            die();
        }
    }

    public function indexAction()
    {
        echo $this->render('photos', [
            'title' => 'Фотографии'
        ]);
    }
}