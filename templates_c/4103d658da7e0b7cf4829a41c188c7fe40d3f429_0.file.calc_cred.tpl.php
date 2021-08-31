<?php
/* Smarty version 3.1.39, created on 2021-08-31 18:57:47
  from 'D:\xampp\htdocs\role\app\views\calc_cred.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612e5f8b2e3f94_54846024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4103d658da7e0b7cf4829a41c188c7fe40d3f429' => 
    array (
      0 => 'D:\\xampp\\htdocs\\role\\app\\views\\calc_cred.tpl',
      1 => 1630429065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_612e5f8b2e3f94_54846024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1724047597612e5f8b2d5806_82138896', 'footer');
?>


<h2 class="content-head is-center">Prosty kalkulator</h2>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1490966058612e5f8b2d63f3_87161345', 'content');
?>



<!-- Scripts -->
<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1724047597612e5f8b2d5806_82138896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1724047597612e5f8b2d5806_82138896',
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
class Block_1490966058612e5f8b2d63f3_87161345 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1490966058612e5f8b2d63f3_87161345',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    
    
<header id="header">
    <nav id="nav">
        <ul>
            <li style="white-space: nowrap;">
                <span style="white-space: nowrap;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
            </li>
            <li style="white-space: nowrap;">
                <a class="button primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" >wyloguj</a>
            </li>
        </ul>
        
    </nav>
</header>    
        
<div id="main" class="wrapper style1">
    <div class="container">
        <section>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
                <fieldset>
                <div class="form">
                    <input type="text" name="value" id="value" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->value;?>
" placeholder="Kwota" />
                    <input type="text"  name="years" id="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
" placeholder="Okres spłaty w latach" />
                    <input type="text"  name="percent" id="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percent;?>
" placeholder="Oprocentowanie" />
                    <ul class="actions">
                        <li><input style="margin-top: 1em;" type="submit" value="Oblicz" class="primary" /></li>
                    </ul>
                </fieldset>
            </form>
</div>
                    <div>        
            
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



            <?php if ((isset($_smarty_tpl->tpl_vars['result']->value->result))) {?>
                <ol class="messbox">
            <h4>Miesięczna rata</h4>
            <p class="res">
                <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['result']->value->result);?>

                zł
            </p>
            </ol>
            <?php }?>     


        </section>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
