<?php
/**
 * Created by PhpStorm.
 * User: Валiк
 * Date: 17.05.2018
 * Time: 18:55
 */
namespace app\components;
use yii\base\Widget;
class MenuWidget extends Widget
{
    public $tpl;


    public function init(){
        parent::init();
        if($this->tpl===null){
            $this->tpl = 'Меню';
        }
        $this->tpl .='.php';
    }
    public function run(){
        return $this->tpl;
    }


}