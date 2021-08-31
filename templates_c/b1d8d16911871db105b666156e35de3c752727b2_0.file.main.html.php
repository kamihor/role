<?php
/* Smarty version 3.1.39, created on 2021-08-31 18:39:28
  from 'D:\xampp\htdocs\role\app\views\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612e5b40bf5cd9_59643028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1d8d16911871db105b666156e35de3c752727b2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\role\\app\\views\\templates\\main.html',
      1 => 1630427967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612e5b40bf5cd9_59643028 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_584939431612e5b40bf4fe2_32318190', 'content');
?>


                    </div>

                       
                    <footer id="footer">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_350246666612e5b40bf5739_20252102', 'footer');
?>
    
                    </footer>

                </div>

            </div>
    </body>
</html>

<?php }
/* {block 'content'} */
class Block_584939431612e5b40bf4fe2_32318190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_584939431612e5b40bf4fe2_32318190',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_350246666612e5b40bf5739_20252102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_350246666612e5b40bf5739_20252102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
