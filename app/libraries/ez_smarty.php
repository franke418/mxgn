<?php
/**
 * File: ez_smarty.php
 * User: Franke Yang <franke418@hotmail.com>
 * Date: 12-3-15
 * Time: 下午5:13
 */
require_once APPPATH . '/libraries/smarty/Smarty.class.php';
class EZ_Smarty extends Smarty
{
    function __construct()
    {
        parent::__construct();
        $this->setCacheDir(dirname(BASEPATH) . '/run');
        $this->setCompileDir(dirname(BASEPATH) . '/run');
        $this->setTemplateDir(dirname(BASEPATH) . '/tpl');
        $this->assign('base_url',base_url());
    }
}

?>