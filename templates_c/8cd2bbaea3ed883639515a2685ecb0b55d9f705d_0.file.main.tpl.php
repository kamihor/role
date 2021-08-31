<?php
/* Smarty version 3.1.39, created on 2021-08-31 18:59:32
  from 'D:\xampp\htdocs\role\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612e5ff4556173_58172836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cd2bbaea3ed883639515a2685ecb0b55d9f705d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\role\\app\\views\\templates\\main.tpl',
      1 => 1630429169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612e5ff4556173_58172836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
    <head>
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>

<header id="header">
    <nav>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1038485461612e5ff4553b21_40904929', 'header');
?>
    
    </nav>
</header>
    
    
    <body class="is-preload">
        <div id="page-wrapper">


            <div id="main" class="wrapper style1">
                <div class="container">
                    <header class="major">
                        <h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h2>
                        <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
</p>
                    </header>
                </div>



                <div class="content-wrapper">

                    <div id="app_content" class="content">

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_922968247612e5ff45553f1_28679325', 'content');
?>


                    </div>

                       
                    <footer id="footer">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1792012137612e5ff4555a70_66088366', 'footer');
?>
    
                    </footer>

                </div>

            </div>
    </body>
</html>

<?php }
/* {block 'header'} */
class Block_1038485461612e5ff4553b21_40904929 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1038485461612e5ff4553b21_40904929',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_922968247612e5ff45553f1_28679325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_922968247612e5ff45553f1_28679325',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1792012137612e5ff4555a70_66088366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1792012137612e5ff4555a70_66088366',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
