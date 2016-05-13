<?php
     
    require('./smarty.config.php');
 
   
 
    $_smarty->assign('title', '欢迎');
    $_smarty->assign('name', 'Smarty');
 
    $_smarty->display('index.tpl');
?>