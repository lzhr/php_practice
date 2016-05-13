
<?php
    //Smarty PHP configuration
     
    define('REAL_PATH','D:\WorkSpace\myphp1\smartyp');
 
    require(REAL_PATH.'/smarty/Smarty.class.php');
 
    $_smarty=new Smarty();
 
    $_smarty->setCacheDir(REAL_PATH.'/cache');
    $_smarty->setConfigDir(REAL_PATH.'/configs');
    $_smarty->setPluginsDir(REAL_PATH.'/plugins'); 
    $_smarty->setTemplateDir(REAL_PATH.'/templates');
    $_smarty->setCompileDir(REAL_PATH.'/templates_c');
 
    
    $_smarty->addPluginsDir(REAL_PATH.'/smarty/plugins');
 
    //¼ì²âSmartyÄ¿Â¼
    //$_smarty->testInstall();
?>