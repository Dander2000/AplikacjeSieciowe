<?php
/* Smarty version 3.1.30, created on 2022-10-27 22:31:22
  from "C:\xampp\htdocs\AplikacjeSieciowe\php_07_kontroler_glowny\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_635aea9a05e566_00396689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6138b054b6322ffe765a657f45db0941e0895e50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_07_kontroler_glowny\\app\\views\\LoginView.tpl',
      1 => 1666902680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_635aea9a05e566_00396689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_489918236635aea9a05bfe2_96549976', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_727272996635aea9a05e140_08930627', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'header'} */
class Block_489918236635aea9a05bfe2_96549976 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h1>

<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_727272996635aea9a05e140_08930627 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
        <label for="id_login">login:
            <input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" />
        </label></br>
        <label for="id_pass">pass:
            <input id="id_pass" type="password" name="pass" /><br />
        </label></br>
        <input type="submit" value="zaloguj" />
    </form>

    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
