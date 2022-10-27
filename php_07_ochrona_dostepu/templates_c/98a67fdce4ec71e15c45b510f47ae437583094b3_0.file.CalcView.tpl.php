<?php
/* Smarty version 3.1.30, created on 2022-10-27 22:35:03
  from "C:\xampp\htdocs\AplikacjeSieciowe\php_07_ochrona_dostepu\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_635aeb77389fc9_61505090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98a67fdce4ec71e15c45b510f47ae437583094b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\php_07_ochrona_dostepu\\app\\views\\CalcView.tpl',
      1 => 1666900192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./tpl/main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_635aeb77389fc9_61505090 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_514104644635aeb7737e594_93662121', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1056406914635aeb7737fd06_51542028', 'nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2029407861635aeb77388753_90749273', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1412535000635aeb77389c20_84436174', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:./tpl/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'header'} */
class Block_514104644635aeb7737e594_93662121 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<h1><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h1>

<?php
}
}
/* {/block 'header'} */
/* {block 'nav'} */
class Block_1056406914635aeb7737fd06_51542028 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<nav>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
">
			<button>
				Kalkulator kredytowy
			</button>
		</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">
			<button>
				Wyloguj
			</button>
		</a>
	</nav>

<?php
}
}
/* {/block 'nav'} */
/* {block 'content'} */
class Block_2029407861635aeb77388753_90749273 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
		<label>Kwota kredytu:
			<input min="0" type="number" name="sum" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['form']->value->s)===null||$tmp==='' ? 0 : $tmp);?>
" style="width: 9em" />PLN
		</label><br />
		<label>Liczba lat kredytu:
			<input id="id_y" min="0" type="number" name="years" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['form']->value->y)===null||$tmp==='' ? 0 : $tmp);?>
" style="width: 6em" />
		</label><br />
		<label>Oprocentowanie:
			<input id="id_i" min="0" type="number" name="interest" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['form']->value->i)===null||$tmp==='' ? 0 : $tmp);?>
" style="width: 6em" />%
		</label><br />
		<input type="submit" value="Oblicz" style="width: 10em" />
	</form>

	
	<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1412535000635aeb77389c20_84436174 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<h5>
		użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>

	</h5>

<?php
}
}
/* {/block 'footer'} */
}
