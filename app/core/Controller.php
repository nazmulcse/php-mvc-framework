<?php
class Controller
{
    public function view($value,$pars1=[],$pars2=[])
    {
        require_once 'app/views/'.$value.'.php';
    }
    public function model($model)
    {
        require_once 'app/models/'.$model.'.php';
        return new $model();
    }
    public function copy($val,$param1=[],$param2=[],$param3=[])
    {
        ob_start();
        echo eval('?>'.file_get_contents('app/views/'.$val.'.php'));
        $out=ob_get_contents();
        ob_end_clean();
        return $out;
    }
}
