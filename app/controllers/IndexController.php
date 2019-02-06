<?php
/**
 * Created by PhpStorm.
 * User: Saeed
 * Date: 2/5/2019
 * Time: 9:20 AM
 */
//namespace Controllers;

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {

        $this->assets->addCss('assets\bootstrap\dist\css\bootstrap.min.css');
        $this->assets->addCss('css/styles.css');

        $this->assets->addJs('assets\jquery\dist\jquery.min.js');
        $this->assets->addJs('assets\bootstrap\dist\js\bootstrap.min.js');





        $this->setWrapperBox();
        $this->setHeaderHeight();

        $this->view->class2 = "login";

    }

    public function setWrapperBox($size=960,$format='px')
    {

        $this->assets->addInlineCss(/** @lang CSS */
            "
        #wrapper{
    max-width: {$size}{$format};}
            ");
    }

    public function setHeaderHeight($height = 120 , $format = 'px')
    {
        $this->assets->addInlineCss(/** @lang CSS */
        "
        .headerWidget{
    height: {$height}{$format};}
                ");
    }



}