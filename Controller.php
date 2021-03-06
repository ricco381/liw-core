<?php
namespace liw\core;

class Controller
{
    /**
     * Запускает генерацию страницы
     * @param $view
     * @param null $attributes
     * @throws \Exception
     */
    public function render($view, $attributes = null)
    {
        View::getView(isset($this->layout)?$this->layout:null)->render($this->getClassFromPath(), $view, $attributes);
    }

    /**
     * осуществляет перенаправление
     * @param $action
     * @param null $attr
     * @throws \Exception
     */
    public function redirect($action, $attr = null){
        if(is_array($action)){
            View::getView()->render($action[0],$action[1], $attr);
            return;
        }
        header('Location: ' . $action);
    }

    /**
     * Возвращает название класса, бъект которого создается
     * в нижнем регистре
     * из строки "\liw\controllers\MainController" делает "main"
     *
     * @return string нижний регистр
     */
    private function getClassFromPath()
    {
        $path = get_class($this);
        $folder = str_replace('controller', '', substr(strrchr(strtolower($path), "\\"), 1));
        return $folder;
    }

    public function twig($view, $attr = [])
    {
        View::getView(isset($this->layout)?$this->layout:null)->twig($this->getClassFromPath(), $view, $attr);
    }

}
