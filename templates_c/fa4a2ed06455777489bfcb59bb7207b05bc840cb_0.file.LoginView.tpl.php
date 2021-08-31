<?php
/* Smarty version 3.1.39, created on 2021-08-31 18:59:21
  from 'D:\xampp\htdocs\role\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612e5fe9de7579_65379878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa4a2ed06455777489bfcb59bb7207b05bc840cb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\role\\app\\views\\LoginView.tpl',
      1 => 1630429096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_612e5fe9de7579_65379878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_909898194612e5fe9dde4c8_88300560', 'footer');
?>


        
        

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1772775750612e5fe9ddee99_33449363', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_909898194612e5fe9dde4c8_88300560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_909898194612e5fe9dde4c8_88300560',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Footer -->
    <ul class="copyright">
        Autor: Kamil Horzela
        <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>

<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1772775750612e5fe9ddee99_33449363 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1772775750612e5fe9ddee99_33449363',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="main" class="wrapper style1">
    <div class="container">
        <section>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
                <fieldset>
                <div class="form">
                    <input type="text" name="login" id="id_login"  placeholder="Login" />
                    <input type="password"  name="pass" id="id_pass" placeholder="Hasło" />
                    <ul class="actions">
                        <li><input style="margin-top: 1em;" type="submit" value="Zaloguj" class="primary" /></li>
                    </ul>
                </fieldset>
            </form>
</div>
    
   <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php
}
}
/* {/block 'content'} */
}
